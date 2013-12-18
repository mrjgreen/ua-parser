<?php namespace UAParser;

class Parser {
    
    public $data;
    
    public $formats = array(
        'user_agent'        => array('family','major','minor','patch'),
        'os'                => array('family','major','minor','patch'),
        'device'            => array('device')
    );
    
    public function __construct($data)
    {
        $this->data = $data;
    }
 
    public function parse($useragent)
    {
        $results = array();
        
        foreach($this->formats as $type => $format) 
        {
            $results[$type] = $this->regex($useragent, $type, $format);
        }
        
        return $results;
    }
    
    public function regex($useragent, $type, $format)
    {
        $return = array();
        
        foreach ($this->data[$type] as $regex => $data) 
        {
            if (preg_match('@' . $regex . '@', $useragent, $info)) 
            {  
                foreach($data as $key => $value) 
                {
                    $return[$key] = $this->interpolate($value, $info);
                }
               
                foreach($format as $i => $key) 
                {
                    // We don't want to overwrite our custom data with generic data, we just fill in the gaps
                    isset($return[$key]) or $return[$key] = isset($info[$i + 1]) ? $info[$i + 1] : null;
                }
                
                if(empty($data['cascade']))
                {
                    return $return;
                }
            }
        }
        
        return $return ?: null;
    }
    
    function interpolate($message, array $context = array())
    {
        $replace = array();
        
        foreach ($context as $key => $val) 
        {
            $replace['$' . $key] = $val;
        }
        
        return strtr($message, $replace);
    }
}