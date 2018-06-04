<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
//    'timeZone' => 'Europe/Kiev',
    'defaultRoute' => 'site/index',
    'language' => 'ru-RU',
    'components' => [
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
//                    'basePath' => '@app/messages',
//                    'sourceLanguage' => 'en-US',
//                    'sourceLanguage' => 'ru-RU',
//                    'fileMap' => [
//                        'app'       => 'app.php',
//                        'app/error' => 'error.php',
//                    ],
                ],
            ],
        ],
        'assetManager' => [
            'linkAssets' => true,
            'bundles' => [
                'dosamigos\google\maps\MapAsset' => [
                    'options' => [
                        'key' => 'AIzaSyBNiaQMazF0ymQJhWFzaWWEEg-JnpNLZ04',
                        'language' => 'ru',
                        'version' => '3.1.18'
                    ]
                ]
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'UHb8yCI6iOiXGkzsLa0BdWL5I69_FuNu',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\admin\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'news' => 'news/index',
                'news/category/<category>' => 'news/index',
                'news/date/<date>' => 'news/index',
                'news/<slug>' => 'news/view',
                'service' => 'service/index',
                'price' => 'service/price',
                'contact' => 'site/contact',
                'service/<slug>' => 'service/view',
                'portfolio' => 'portfolio/index',
                'portfolio/<slug>' => 'portfolio/view',
                'products' => 'products/index',
                'admin/login' => 'admin/admin/login',
            ],
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\AdminModule',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
