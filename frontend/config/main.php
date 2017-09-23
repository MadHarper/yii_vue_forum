<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
                '/'   => 'site/index',

                '/authdate' => 'auth/authdate',
                '/login' => 'auth/login',
                '/logout' => 'auth/logout',

                '/subcategory/<slug:\w+>' => 'category/sub',

                '/category' => 'category/index',
                //'/category' => 'category/index',


                '/theme' => 'theme/index',

                //любой
                //'/<slug:\w+>'   => 'site/index',
            ],
        ],
        'assetManager' => [
            'forceCopy' => true,
        ],
        'view'         => [
            'theme' => [
                'basePath' => '@frontend/themes/vue',
                'baseUrl'  => '@web/themes/vue',
                'pathMap'  => [
                    '@frontend/views'                  => '@frontend/themes/vue/views',
                ],
            ],
        ],

    ],
    'params' => $params,
];
