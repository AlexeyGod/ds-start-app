<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 *
 */

return [
    'debug' => true,
    'app' => 'terminal',
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

            'terminal' => [
                'class' => 'framework\\components\\Terminal',
                'options' => [
                    
                ],
            ],
        ]
];