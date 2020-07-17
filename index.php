<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */

/* Настройки */
$config = require(dirname(__FILE__).'/config/config.php');

/* Автозагрузка классов */
include 'autoload.php';
Autoloader::register($config['autoLoader']);

/* Установка */
if(is_dir("install"))
{
	include "install/index.php";
	exit();
}


/* Старт приложения */
$app = new framework\core\Application($config);

$app->run();