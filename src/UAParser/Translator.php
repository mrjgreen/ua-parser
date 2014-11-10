<?php namespace UAParser;

use Symfony\Component\Yaml\Yaml;

class Translator {

    protected static $defaultDelimiter = '@';

    protected static $defaultTranslations = array(
        'user_agent_parsers'    => 'user_agent',
        'os_parsers'            => 'os',
        'device_parsers'        => 'device',
        'family_replacement'    => 'family',
        'os_replacement'        => 'family',
        'os_v1_replacement'     => 'major',
        'os_v2_replacement'     => 'minor',
        'os_v3_replacement'     => 'patch',
        'v1_replacement'        => 'major',
        'v2_replacement'        => 'minor',
        'v3_replacement'        => 'patch',
        'v4_replacement'        => 'patch_minor',
        'device_replacement'    => 'device',
        'brand_replacement'     => 'manufacturer',
        'model_replacement'     => 'model',
    );

    protected $delimiter;

    protected $translations;

    protected $yamlParser;

    public function __construct()
    {
        $this->delimiter = self::$defaultDelimiter;

        $this->translations = self::$defaultTranslations;

        $this->yamlParser = new Yaml();
    }

    /**
     * @param $yamlRegexData
     * @return array
     */
    public function translate($yamlRegexData)
    {
        $translations = $this->translations;

        $translations[$this->delimiter] = '\\' . $this->delimiter;

        // Translate the nomenclature into the correct names for our parser
        $str = strtr($yamlRegexData, $translations);

        $phpRegexData = $this->yamlParser->parse($str);

        return $this->reindex($phpRegexData);
    }

    /**
     * @param array $arrayData
     * @return array
     */
    public function reindex(array $arrayData)
    {
        $final = array();

        foreach(array('user_agent', 'os', 'device') as $category)
        {
            if(isset($arrayData[$category]))
            {
                $final[$category] = $this->func($arrayData[$category]);
            }
        }
        
        return $final;
    }

    /**
     * @param $categoryData
     * @return array
     */
    protected function func($categoryData)
    {
        $data = array();

        foreach($categoryData as $regex)
        {
            $flag = isset($regex['flag']) ? $regex['flag'] : '';

            $key = $this->delimiter . $regex['regex'] . $this->delimiter . $flag;

            if(!isset($data[$key]))
            {
                $data[$key] = array_diff_key($regex, array('regex' => 1, 'flag' => 1));
            }
        }

        return $data;
    }
}
