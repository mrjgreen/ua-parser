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
        // Translate the nomenclature into the correct names for our parser
        $str = strtr($spycdata, static::$translations);

        // The string is yaml so load it using the spyc package
        return static::reindex(spyc_load($str));
    }
    
    public static function reindex(array $arrayData)
    {
        $final = array();

        foreach(array('user_agent','os','device') as $category){
            $final[$category] = array();
            foreach($arrayData[$category] as $regex) {
                $key = $regex['regex'];
                unset($regex['regex']);
                isset($final[$category][$key]) or $final[$category][$key] = $regex;
            }
        }
        
        return $final;
    }
}
