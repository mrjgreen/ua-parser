<?php namespace UAParser;

class Capabilites{
    
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function parse($devicename)
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