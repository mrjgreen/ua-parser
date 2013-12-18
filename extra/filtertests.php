<?php

$tests = array(
    array(
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36 BMID/1234567891',
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36 BMID/0000000000'
    ),
    array(
        'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; ARM; Trident/6.0; Touch; WebView/1.0) BMID/9878742623',
        'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; ARM; Trident/6.0; Touch; WebView/1.0) BMID/0000000000',
    ),
    array(
        'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; ARM; Trident/6.0; Touch; WebView/1.0) BMID/9878742623',
        'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; ARM; Trident/6.0; Touch; WebView/1.0) BMID/0000000000',
    ),
    array(
        'Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.2.6) Gecko/20100625 Firefox/5.0 (de) Anonymisiert durch AlMiSoft Browser-Maulkorb 43539053',
        'Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.2.6) Gecko/20100625 Firefox/5.0 (de) Anonymisiert durch AlMiSoft Browser-Maulkorb 00000000',
        ),
    array(
        'Mozilla/5.0 (Windows; U; Windows NT 6.1; de) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/17.0.963.83 Chrome anonymized by Abelssoft 694651121',
        'Mozilla/5.0 (Windows; U; Windows NT 6.1; de) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/17.0.963.83 Chrome anonymized by Abelssoft 000000000',
    ),
    array(
        'Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.2.6) Gecko/20100625 Firefox/11.0 (de) Anonymisiert durch AlMiSoft Browser-Anonymisierer 67210610',
        'Mozilla/5.0 (Windows; U; Windows NT 6.1; de; rv:1.9.2.6) Gecko/20100625 Firefox/11.0 (de) Anonymisiert durch AlMiSoft Browser-Anonymisierer 00000000',
    )
);

include __DIR__ . '/../vendor/autoload.php';


$ua = new UAParser\Filter(include __DIR__ . '/../resources/filters.php');

$output = '';

foreach($tests as $test) {
    $output .= $test[0] . "\n";
    $output .= $ua->filter($test[0]) . "\n\n";
}

echo nl2br($output);