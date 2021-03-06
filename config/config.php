<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 *
 */

return [
    'debug' => true,
    'autoLoader' => [
        'framework\\' => '../framework/', // Правило для автозагрузки фреймворка (если он не в одной папке с сайтом)
        'modules\\' => '../ds-modules/', // Правило для автозагрузки модулей (если они не в одной папке с сайтом)
    ],
    'aliases' => [
        '@root' => getenv("DOCUMENT_ROOT"), // ROOT путь
        '@framework' => getenv("DOCUMENT_ROOT").'/../framework', //Алиас для пути к фреймворку
        '@modules' => getenv("DOCUMENT_ROOT").'/../ds-modules', //Алиас для пути к модулям
        '@web' => '/', // WEB адрес
        '@uploadPath' => '/uploads', // Указывается относительно ROOT

    ],
    'components' =>
        [

            'db' => [
                'class' => 'framework\\components\\db\\DataBase',
                'options' => [
                    'host' => 'localhost',
                    'database' => 'pure', // Название базы
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
            'assetManager' => [
                'class' => 'framework\\components\\AssetManager',
                'options' => [
                    //'autoReload' => false,
                    'autoReload' => true, // Принудительная очистка кэша ресурсов
                ]
            ],
        ]
];