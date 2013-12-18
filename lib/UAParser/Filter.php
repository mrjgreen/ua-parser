<?php namespace UAParser;

class Filter {
    
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function filter($useragent)
    {        
        foreach ($this->data as $regex => $data) 
        {
            $modifier = empty($data['case_sensitive']) ? 'i' : '';
            
            if($result = preg_filter('@' . $regex . '@' . $modifier, $data['replacement'], $useragent))
            {
                $useragent = $result;
                
                if(empty($data['cascade']))
                {
                    break;
                }
            }
        }
        
        return $useragent;
    }
}