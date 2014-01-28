<?php namespace UAParser;

class Capabilities{
    
    public $data;
    
    public function __construct($data = null)
    {
        $this->data = $data ?: include  __DIR__ . '/../../resources/capabilities.php';
    }
    
    public function parse($devicename, $return_regex = false)
    {
        $return = array();
        
        foreach ($this->data as $manufacturer => $regexes) 
        {
            foreach ($regexes as $data) 
            {
                if (preg_match('@' . $data['regex'] . '@i', $devicename, $info)) 
                {   
                    unset($data['regex']);
                    
                    foreach($data as $key => $value) 
                    {
                        $return[$key] = $this->interpolate($value, $info);
                    }

                    isset($return['manufacturer']) or $return['manufacturer'] = $manufacturer;
                    isset($return['device']) or $return['device'] = $devicename;
                    
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
