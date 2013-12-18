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