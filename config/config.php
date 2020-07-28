<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 *
 */

return [
    'debug' => true,
    'aliases' =>
        [
            '@domain' => getenv('HTTP_HOST'),
            '@webroot' => getenv('DOCUMENT_ROOT'),
            '@root' => getenv('DOCUMENT_ROOT'),
            '@web' => '/',
            '@application' => getenv('DOCUMENT_ROOT').'/application',
            '@themes' => getenv('DOCUMENT_ROOT').'/themes',
            '@uploadPath' => '/uploads', // Указывается относительно WEB ROOT
        ],
    'components' =>
        [
            //* For project used DB

            'db' => [
                'class' => 'framework\\components\\db\\DataBase',
                'options' => [
                    'host' => 'localhost',
                    'database' => 'test_base', // Название базы
                    'username' => 'root', // Имя пользователя
                    'password' => '', // Пароль
                    'defaultCharset' => 'utf-8',
                ],
            ],
            
            //'identy' => [
            //    'class' => 'modules\\user\\models\\User', // Админимстратор по умолчанию: admin 123456
            //    'options' => [
            //        'autoLogin' => true, // Автологин
            //        'enableTokenAuth' => true, // Автологин по токену
            //    ]
            //],
            //*/
            'assetManager' => [
                'class' => 'framework\\components\\AssetManager',
                'options' => [
                    'autoReload' => false,
                    //'autoReload' => true, // Принудительная очистка кэша ресурсов
                ]
            ],
            'logger' => [
                'class' => 'framework\\helpers\\Logger'
            ],
            'request' => [
                'class' => 'framework\\components\\Request',
            ],
            'urlManager' => [
                'class' => 'framework\\components\\routing\\UrlManager',
                'options' => [
                    'rules' => [
                        '' => 'default/index',
                        '<action: [A-Za-z0-9_-]+>' => '<action>',
                        '<controller: [A-Za-z0-9_-]+>/<action: [A-Za-z0-9_-]+>' => '<controller>/<action>',
                        '<module: [A-Za-z0-9_-]+>/<controller: [A-Za-z0-9_-]+>/<action: [A-Za-z0-9_-]+>' => '<module>/<controller>/<action>',
                        '<module: [A-Za-z0-9_-]+>/<controller: [A-Za-z0-9_-]+>/<action: [A-Za-z0-9_-]+>/<id: [0-9]+>' => '<module>/<controller>/<action>',
                    ]
                ]
            ],
            'route' => [
                'class' => 'framework\\components\\Route'
            ],
            'identy' => [
                'class' => 'application\\models\\User',
                'options' => [
                    'autoLogin' => true
                ]
            ],
        ],
    'containers' =>
        [
            'framework\\components\\View' => [
                'viewPath' => '@root/themes'
            ],
            'framework\\helpers\\captcha\\Captcha' => [
                'image_dir' => '@framework/helpers/captcha/img',
                'fonts_path' =>  '@framework/helpers/captcha/fonts',
                'verifyCodeName' => 'ds-captcha',
            ]
        ],
];