<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1eBslmh8ULXkRBwVBs6n4lTaBPCfr56r',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['modules']['gii'] = 
    [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
        'generators' => [ 
        'kouoslModule' => [
        'class' => 'kouosl\gii\module\Generator', 
        
        ]],
    ];
}

return $config;
