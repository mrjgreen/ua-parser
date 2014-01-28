<?php return array (
    
    //This is an example of how to create filters. This can be used to remove "Random" additions to users' ua string
    
    // Filters are case insensitive by default add case_sensitive => true to the array to override
    'BMID/[A-Z0-9]{10}' => array (
        'replacement' => 'BMID/0000000000',
    ),
    'WUID=[A-Za-z0-9]{32}' => array (
        'replacement' => 'WUID=00000000000000000000000000000000',
    ),
    'WTB=[0-9]{4}' => array (
        'replacement' => 'WTB=0000',
    ),
    'Anonymisiert durch AlMiSoft Browser-Anonymisierer [0-9]{8}' => array (
        'replacement' => 'Anonymisiert durch AlMiSoft Browser-Anonymisierer 00000000',
    ),
    'Anonymisiert durch AlMiSoft Browser-Maulkorb [0-9]{8}' => array (
        'replacement' => 'Anonymisiert durch AlMiSoft Browser-Maulkorb 00000000',
    ),
    '.{20,30}= [0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}Z' => array (
        'replacement' => 'RandomString= DateandTime',
    ),
    'Mobile/[A-Z0-9]{6} .[0-9]{9}' => array (
        'replacement' => 'Mobile/000000 (000000000)',
    ),
    'AlexaToolbar/[a-zA-Z0-9]{8}-[0-9].[0-9]' => array (
        'replacement' => 'AlexaToolbar/aaaaaaaa-0.0',
    ),
    'anonymized by Abelssoft ([0-9]{9}|[0-9]{10})' => array (
        'replacement' => 'anonymized by Abelssoft 0000000000',
    ),
    'NCLIENT50_[A-Z0-9]{14}' => array (
        'replacement' => 'NCLIENT50_00000000000000',
    ),
    'TCO_[0-9]{14};' => array (
        'replacement' => 'TCO_00000000000000',
    ),
    'TF[0-9]{33}' => array (
        'replacement' => 'TF000000000000000000000000000000000',
    ),
);
