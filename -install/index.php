<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru

 Установщик фреймворка

 */


$sqlDir = 'install/sql';
// Загрузка конфиг-файла
$config = require("config/config.php");
// MySQL
$mysqlConfig = $config['components']['db']['options'];

include "header.php";
?>
<h1>MySQL Config</h1>
<pre><?=var_dump($mysqlConfig)?></pre>
<h1>Проверка соединения с базой</h1>
<?php
	try {
		$db = new PDO(
				'mysql:host='.$mysqlConfig['host'].';dbname='.$mysqlConfig['database'],
				$mysqlConfig['username'],
				$mysqlConfig['password']
		);
		echo '<div style="background: #00ff00">Success</div>';
	}
	catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
	}
?>
<h1>Таблицы в базе</h1>
<?php
	$query = $db->query("SHOW TABLES");
	if($query)
	{
		$tables = $query->fetchAll();

	}
else
	$tables = [];

	echo '<div>Таблицц: '.count($tables).'</div>';

	$dir = glob($sqlDir.'/*');

	if(count($tables) > 0)
	{
		foreach ($tables as $table)
		{
			echo '<p>'.$table[0].'</p>';
		}
	}
?>
<h1>Список таблиц для загрузки в <code><?=$sqlDir?></code> (<?=count($dir)?>)</h1>
<table border="1" width="100%">
	<tr>
		<th>#</th>
		<th>Файл</th>
		<th>Запросов</th>
		<th>Успешно</th>
		<th>Ошибки</th>
	</tr>
	<?

	foreach ($dir as $gIndex => $file)
	{
		$dump = file($file);
		$sql = '';
		$success = 0;
		$errors = 0;
		foreach($dump as $string)
		{
			// пропуски
			if(empty($string) OR substr($string, 0, 2) == '--' OR substr($string, 0,2) == '/*') continue;

			// Формируем запрос
			$sql .= $string;

			if(substr(trim($string), -1) == ';')
			{
				$sqlQuerys[] = $sql;
				$sql = '';
			}
		}

		if(!empty($sqlQuerys))
		{
			$db->query("SET CHARACTER SET utf8");

			//echo '<div class="spoiler">';
			foreach($sqlQuerys as $index => $query)
			{
				// Выполнить SQL

				if($db->query($query))
					$success++;
				else
				{
					$errors++;
					$errorSQL[$index]['query'] = $query;
					$errorSQL[$index]['error'] = $db->errorInfo();
				}

				//if($connect->query($query))
				//	echo 'Успешно';
				//else
				//	echo 'Ошибка: '.var_export($connect->errorInfo(), true);
				//echo '</p>'
				//		.'</div>';
			}
			//echo '</div>';
		}


		echo '<tr>'
				.'<td>'.($gIndex+1).'</td>'
				.'<td>'.basename($file).'</td>';
		echo '<td>'.count($sqlQuerys).'</td>';
		echo '<td>'.$success.'</td>';
		echo '<td>'.$errors.'</td>';

		echo '</tr>';

	}

	?>
</table>
<div>
	<h1>Запросы с ошибками</h1>
	<?php
	foreach ($errorSQL as $sql)
	{
		echo '<pre>'.htmlspecialchars($sql['query']).'</pre>';
		echo '<pre>Error: '.htmlspecialchars(var_export($sql['error'], true)).'</pre>';
	}

	?>
</div>

<?
//include "modules/prepare.php";
//include "modules/insert_tables.php";
//include "modules/help.php";

include "footer.php";