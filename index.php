<?php

include 'vendor/autoload.php';
$config = require(__DIR__.'/config/config.php');

$app = new framework\core\Application($config);

$app->run();