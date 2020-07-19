<?php

/* Настройки */
$config = require(dirname(__FILE__).'/config/config.php');

/* Автозагрузка классов */
include 'vendor/autoload.php';

/* Старт приложения */
$app = new framework\core\Application($config);

$app->run();