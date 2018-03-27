<?php
return [
    'aliases' =>
    [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' =>
    [
//        'user' =>
//        [
//            'class' => 'dektrium\user\Module',
//        ]
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' =>
    [
        'cache' =>
        [
            'class' => 'yii\caching\FileCache',  //缓存组件类
        ],
        'authManager' =>
        [
            'class' => 'yii\rbac\DbManager'
        ]
    ],
];
