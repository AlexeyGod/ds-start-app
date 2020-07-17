<?php

// SQL Дамп
$sqlDumpFile = 'install/sql/dump.sql';


// MySQL
$mysqlConfig = $config['components']['db']['options'];

// Соединение с БД
try {
	$connect = new PDO('mysql:host='.$mysqlConfig['host'].';dbname='.$mysqlConfig['database'], $mysqlConfig['username'], $mysqlConfig['password']);
	$connectStatus = true;
} catch (Exception $e) {
	$connectStatus = false;
	$connectionError = $e;
}

?>