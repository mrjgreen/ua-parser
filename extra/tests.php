<?php

include __DIR__ . '/spyc.php';
include __DIR__ . '/../vendor/autoload.php';


$ua = new UAParser\Parser(include __DIR__ . '/../resources/regexes.php');

$subdir = __DIR__ . '/../test_resources/';


$output = '';
$passed = array();
$failed = array();
foreach(array('user_agent','os','device') as $type) {
    $output .= '<h2>'.$type.'</h2>';
    $tests = spyc_load_file($subdir . 'test_'.$type.'.yaml');
    foreach($tests['test_cases'] as $test) {
        $uaString = $test['user_agent_string'];
        $output .= $uaString . "\n";

        if(($result = $ua->parse($uaString)) && isset($result[$type])) {    

            unset($test['user_agent_string']);
            unset($test['js_ua']); #TODO - test this

            if($diff = array_diff($test, $result[$type])){
                $failed[] = array($uaString,$test,$result);
            }else {
                $output .= "Passed\n";
                $passed[] = array($uaString,$test,$result);
                $output .= $uaString . "\nExp: " . implode('|' , $test) . "\nGot: " . implode('|' , $result[$type]) . "\n";
            }
        }else{
            $failed[] = array($uaString,$test,null);
            $output .= "Nothing Returned";
        }

        $output .= "\n\n";
    }
}

$output = 'Passed: ' . count($passed) . ', Failed: ' . count($failed) . "\n\n<pre>"  . "</pre>\n\n" . $output;
echo nl2br($output);
