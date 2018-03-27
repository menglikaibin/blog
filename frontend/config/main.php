<?php
use dektrium\user\Mailer;
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'post/index',
    'language' => 'zh-CN',
    'modules' =>
    [
//        'user' =>
//        [
//            'as frontend' => 'dektrium\user\filters\FrontendFilter'
//        ]
    ],

    'components' =>
    [
        'request' =>
        [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' =>
        [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' =>
        [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' =>
        [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' =>
            [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' =>
        [
            'errorAction' => 'site/error',
        ],

//        'urlManager' => [
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'suffix' => '.html',
//            'rules' =>
//            [
//                '<controller:\w+>/<id:\d+>'=>'<controller>/detail',
//                'posts'=>'post/index',
//            ],
//        ],
        'mailer' =>
        [
            'class' => 'yii\swiftmailer\Mailer',
//            'viewPath' => '@frontend/mail',
            'useFileTransport' => false,
            'Transport' =>
                [
                    'class' => 'Swift_SmtpTransport',
                    'host' => 'smtp.163.com',
                    'username' => 'menglikaibin@163.com',
                    'password' => 'wukaibin15',
                    'port' => 25,
                    'encryption' => 'tls'
                ],
            'messageConfig' =>
                [
                    'charset' => 'UTF-8',
                    'from' => ['menglikaibin@163.com']
                ]

        ],

    ],
    'params' => $params,
];
