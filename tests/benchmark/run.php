<?php

require __DIR__ . '/../../vendor/autoload.php';

$testFile = __DIR__ . '/useragents.txt';

$tests = file($testFile);

$count = count($tests);

echo "Read $count agents from $testFile\nRunning benchmark, please wait...";

$parser = new UAParser\Parser();

$start = microtime(true);

foreach($tests as $agent)
{
    $parser->parse($agent);
}

$time = microtime(true) - $start;


echo "\nParsed $count agents in $time seconds\n";