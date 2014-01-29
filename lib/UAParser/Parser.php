<?php namespace UAParser;

class Parser {
    
    public $data;
    
    public $formats = array(
        'user_agent'        => array('family','major','minor','patch'),
        'os'                => array('family','major','minor','patch'),
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
    
    public function regex($useragent, $type, $format, $returnregex = false)
    {
        $return = array();
        
        foreach ($this->data[$type] as $regex => $data) 
        {
            $flag = isset($data['regex_flag']) ? $data['regex_flag'] : '';
            
            if (preg_match('@' . $regex . '@' . $flag, $useragent, $info)) 
            {  
                if(isset($data['regex_flag']))
                {
                    unset($data['regex_flag']);
                }
                
                foreach($data as $key => $value) 
                {
                    $return[$key] = $this->interpolate($value, $info);
                }
               
                foreach($format as $i => $key) 
                {
                    // We don't want to overwrite our custom data with generic data, we just fill in the gaps
                    isset($return[$key]) or $return[$key] = isset($info[$i + 1]) ? $info[$i + 1] : null;
                }
                
                if($returnregex)
                {
                    isset($return['regexes']) or $return['regexes'] = array();
                    $return['regexes'][] = $regex;
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
