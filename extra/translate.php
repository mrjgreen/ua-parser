<?php

/**
 * Translate a regex.yaml file from tobie/ua-parser project into array format required here
 */
include __DIR__ . '/spyc.php';
 
// Translate
$str = str_replace(array(
    'user_agent_parsers',
    'os_parsers',
    'device_parsers',
    'family_replacement',
    'os_replacement',
    'device_replacement',
    'v1_replacement',
    'v2_replacement',
    'v3_replacement',
    'v4_replacement'
),array(
    'user_agent',
    'os',
    'device',
    'family',
    'family',
    'device',
    'major',
    'minor',
    'patch',
    'patch_minor'
),file_get_contents(__DIR__ . '/../resources/regexes.yaml'));
 
if(isset($_SERVER['argv'][1]))
{
    if(is_file($_SERVER['argv'][1]))
    {
        $str .= file_get_contents($_SERVER['argv'][1]);
    }elseif(is_dir($_SERVER['argv'][1])) {
        foreach(new IteratorIterator(new RecursiveDirectoryIterator($_SERVER['argv'][1])) as $file)
        {
            if(is_file($file) && substr($file, -5) === '.yaml')
            {
                $str .= file_get_contents($_SERVER['argv'][1]);
            }
        }
    }else{
        throw new \Exception('Path ' . $_SERVER['argv'][1] . ' is not a file or directory');
    }
}

$regexes = spyc_load($str);

$final = array();
 
foreach(array('user_agent','os','device') as $category){
    $final[$category] = array();
    foreach($regexes[$category] as $regex) {
        $key = $regex['regex'];
        unset($regex['regex']);
        $final[$category][$key] = $regex;
    }
}
file_put_contents(__DIR__ . '/../resources/regexes.php','<?php return ' . var_export($final,1). ';');


$manufacturers = spyc_load(file_get_contents(__DIR__ . '/../resources/manufacturer.yaml'));


file_put_contents(__DIR__ . '/../resources/devices.php','<?php return ' . var_export($manufacturers,1). ';');