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
 
    public function parse($useragent, $returnregex = false)
    {
        $results = array();
        
        foreach($this->formats as $type => $format) 
        {
            $results[$type] = $this->regex($useragent, $type, $format, $returnregex);
        }
        
        return $results;
    }
    
    private function regex($useragent, $type, $format, $returnregex = false)
    {                
        foreach ($this->data[$type] as $regex => $data) 
        {
            $flag = $this->arrayGet($data, 'regex_flag');
            
            if (preg_match('@' . $regex . '@' . $flag, $useragent, $info)) 
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
    
    private function arrayGet($array, $key, $default = null)
    {
        return isset($array[$key]) ? $array[$key] : $default;
    }
    
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
