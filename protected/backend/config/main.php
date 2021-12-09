<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'name' => 'Панель управления',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'defaultRoute' => 'page/page/index',
    'modules' => [
        'menu' => [
            'class' => 'common\modules\menu\Menu',
        ],
        'page' => [
            'class' => 'common\modules\page\Module',
        ],
        'cars' => [
            'class' => 'common\modules\cars\Module',
        ],
        'settings' => [
            'class' => 'common\modules\settings\Module',
        ],
        'block' => [
            'class' => 'common\modules\block\Module',
        ],
        'user' => [
            'class' => 'common\modules\user\Module',
            // 'layout' => 'left-menu',
        ],
        'gii'=>[
            'class'=>'yii\gii\Module',
            'generators'=>[
                'crud'=>[
                    'class'=>'yii\gii\generators\crud\Generator',
                    'templates'=>[
                        'artur'=>'@backend/generators/crud/artur',
                    ]
                ],
                'model'=>[
                    'class'=>'yii\gii\generators\model\Generator',
                    'templates'=>[
                        'artur'=>'@backend/generators/model/artur',
                    ]
                ],
                'module'=>[
                    'class'=>'yii\gii\generators\module\Generator',
                    'templates'=>[
                        'artur'=>'@backend/generators/module/artur',
                    ]
                ]
            ],
            'allowedIPs' => ['*'],
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\modules\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
            'loginUrl' => ['/user/user/login'],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'], //���������� ������ � ���� ��������� @ - ��� ���������������� , ? - ��� ������ , ���� ������� ���� ['@', '?']
            'disabledCommands' => ['netmount'], //���������� �������� ������ https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#commands
            'roots' => [
                [
                    'baseUrl'=>'',
                    'basePath'=>'@www',
                    'path' => 'files/upload',
                    'name' => 'Картинки'
                ], 
            ],
        ]
    ],
    'as access' => [
        'class' => 'common\modules\user\components\AccessControl',
        'allowActions' => [
            // '*',
            'user/user/login',
            'user/user/signup',
            'user/user/logout',
        ]
    ],
    'params' => $params,
];