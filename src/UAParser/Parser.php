<?php namespace UAParser;

class Parser {
    
    private $data;
    
    private $formats = array(
        'user_agent'        => array('family', 'major', 'minor', 'patch'),
        'os'                => array('family', 'major', 'minor', 'patch'),
        'device'            => array('device', 'brand', 'model'),
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

                // Set the defaults
                foreach($format as $position => $key)
                {
                    $return[$key] = $this->arrayGet($info, $position + 1);
                }

                // Overwrite defaults with specified/custom attributes
                foreach($data as $key => $value)
                {
                    $return[$key] = $this->interpolate($data[$key], $info);
                }

                $returnregex and $return['regex'] = $regex;

                return $return ?: null;
            }
        }
    }

    /**
     * @param $array
     * @param $key
     * @return null
     */
    private function arrayGet($array, $key)
    {
        return isset($array[$key]) ? $array[$key] : null;
    }

    /**
     * @param $message
     * @param array $context
     * @return string
     */
    private function interpolate($message, array $context = array())
    {
        $replace = array('$1' => '', '$2' => '', '$3' => '', '$4' => '');

        foreach ($context as $key => $val)
        {
            $replace['$' . $key] = $val;
        }
        
        return trim(strtr($message, $replace));
    }
}
