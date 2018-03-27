<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' =>
        [
//            'user' =>
//            [
//                'as backend' => 'dektrium\user\filters\BackendFilter'
//            ]
        ],
    'language' => 'zh-CN',
    'timeZone'=>'Asia/Shanghai',
    'aliases' =>              //应用提供了一个名为aliases的可写属性,可以再应用配置中设置他
        [                       //解析别名,可以调用Yii::getAlias()命令来解析根别名到对应的文件路径或url
            '@foo' => '/path/to/foo',
            '@bar' => 'http://www.example.com'
        ],
    'components' =>
    [
        'request' =>
        [
            'csrfParam' => '_csrf-backend',
        ],
        'user' =>
        [
            'identityClass' => 'common\models\Adminuser',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' =>
        [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
