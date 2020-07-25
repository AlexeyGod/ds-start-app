<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 *
 */

return [
    'debug' => true,
    'aliases' => [
        '@uploadPath' => '/uploads', // Указывается относительно ROOT
    ],
    'components' =>
        [
            /* For project used DB

            'db' => [
                'class' => 'framework\\components\\db\\DataBase',
                'options' => [
                    'host' => 'localhost',
                    'database' => '', // Название базы
                    'username' => 'root', // Имя пользователя
                    'password' => '', // Пароль
                    'defaultCharset' => 'utf-8',
                ],
            ],
            
            'identy' => [
                'class' => 'modules\\user\\models\\User', // Админимстратор по умолчанию: admin 123456
                'options' => [
                    'autoLogin' => true, // Автологин
                    'enableTokenAuth' => true, // Автологин по токену
                ]
            ],
            */
            'assetManager' => [
                'class' => 'framework\\components\\AssetManager',
                'options' => [
                    'autoReload' => false,
                    //'autoReload' => true, // Принудительная очистка кэша ресурсов
                ]
            ],
        ]
];