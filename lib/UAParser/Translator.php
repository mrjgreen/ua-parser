<?php namespace UAParser;

class Translator {
    
    public static $translations = array(
        'user_agent_parsers' => 'user_agent',
        'os_parsers' => 'os',
        'device_parsers' => 'device',
        'family_replacement' => 'family',
        'os_replacement' => 'family',
        'os_v1_replacement' => 'major',
        'os_v2_replacement' => 'minor',
        'os_v3_replacement' => 'patch',
        'v1_replacement' => 'major',
        'v2_replacement' => 'minor',
        'v3_replacement' => 'patch',
        'v4_replacement' => 'patch_minor',
        'device_replacement' => 'device',
        'brand_replacement' => 'manufacturer',
        'model_replacement' => 'model',
        '@'              => '\@' // @ is the delimiter so needs to be escaped
    );
    
    public static function translate($spycdata)
    {
        include_once __DIR__ . '/../../extra/spyc.php';
        
        // Translate the nomenclature into the correct names for our parser
        $str = strtr($spycdata, static::$translations);

        // The string is yaml so load it using the spyc package
        return static::reindex(spyc_load($str));
    }
    
    public static function reindex(array $arrayData)
    {
        $final = array();

        foreach(array('user_agent','os','device') as $category){
            if(!isset($arrayData[$category])) continue;
            $final[$category] = array();
            foreach($arrayData[$category] as $regex) {
                $key = $regex['regex'];
                unset($regex['regex']);
                isset($final[$category][$key]) or $final[$category][$key] = $regex;
            }
        }

        foreach($final as $category => $data) {
            $final[$category] = static::generateVariableRouteData($data);
        }
        
        return $final;
    }

    private static function generateVariableRouteData($data)
    {
        $chunkSize = static::computeChunkSize(count($data));
        $chunks = array_chunk($data, $chunkSize, true);
        return array_map(function($chunk){
            return static::processChunk($chunk);
        }, $chunks);
    }

    const APPROX_CHUNK_SIZE = 10;

    private static function computeChunkSize($count)
    {
        $numParts = max(1, round($count / self::APPROX_CHUNK_SIZE));
        return ceil($count / $numParts);
    }

    private static function processChunk($regexToRoutesMap)
    {
        $routeMap = [];
        $regexes = [];
        $count = 0;
        $tabs = '';
        foreach ($regexToRoutesMap as $regex => $match) {

            $count++;
            $tabs .= "\t";

            $regexes[] = '(?:(' . $regex . ')(?:.*)([\t]{' . $count . '}))';

            $routeMap[$tabs] = $match;

        }

        $regex = '(?|' . implode('|', $regexes) . ')';
        return ['regex' => $regex,'append' => $tabs,'routeMap' => $routeMap];
    }
}
