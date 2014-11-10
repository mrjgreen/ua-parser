<?php namespace UAParser;

class Parser {
    
    private $data;
    
    public $formats = array(
        'user_agent'        => array('family', 'major', 'minor', 'patch'),
        'os'                => array('family', 'major', 'minor', 'patch'),
        'device'            => array('device', 'manufacturer', 'model'),
    );
    
    public function __construct($data = null)
    {
        $this->data = $data ?: include  __DIR__ . '/../../resources/regexes.php';
    }

    /**
     * @param $useragent
     * @param bool $returnregex
     * @return array
     */
    public function parse($useragent, $returnregex = false)
    {
        $results = array();
        
        foreach($this->formats as $type => $format) 
        {
            $results[$type] = $this->regex($useragent, $type, $format, $returnregex);
        }
        
        return $results;
    }

    /**
     * @param $useragent
     * @param $type
     * @param $format
     * @param bool $returnregex
     * @return null
     */
    private function regex($useragent, $type, $format, $returnregex = false)
    {                
        foreach ($this->data[$type] as $regex => $data) 
        {
            if (preg_match($regex, $useragent, $info))
            {
                $return = array();

                foreach($format as $position => $key)
                {
                    $return[$key] = isset($data[$key]) ? $this->interpolate($data[$key], $info) : $this->arrayGet($info, $position + 1);
                }

                $returnregex and $return['regex'] = $regex;

                return $return ?: null;
            }
        }
    }

    /**
     * @param $array
     * @param $key
     * @param null $default
     * @return null
     */
    private function arrayGet($array, $key, $default = null)
    {
        return isset($array[$key]) ? $array[$key] : $default;
    }

    /**
     * @param $message
     * @param array $context
     * @return string
     */
    private function interpolate($message, array $context = array())
    {
        $replace = array();
        
        foreach ($context as $key => $val) 
        {
            $replace['$' . $key] = $val;
        }
        
        return strtr($message, $replace);
    }
}
