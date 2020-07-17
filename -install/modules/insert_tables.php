<?php

	// Проверка соединения
?>
<div class="status">
	<p>Соединение с MySQL: <b class="<?=($connectStatus ? 'success' : 'error')?>"><?=($connectStatus ? 'Успешно соединено с '.$mysqlConfig['host'].', БД: '.$mysqlConfig['database'] : 'Ошибка: '.iconv("windows-1251", "utf-8", $connectionError->getMessage()))?></b></p>
</div>
<?
// проверка наличия таблиц
$sqlQuery = $connect->query("SHOW TABLES FROM ".$mysqlConfig['database']);
if(is_object($sqlQuery)) $tables = $sqlQuery->fetchAll();
//else
//	exit("Ошибка при запросе списка таблиц");

if(count($tables) == 0)
{
	//$connect->query("SET CHARACTER SET utf8");
	// Импорт дампа
	?>
	<!-- Проверка файла с дампом -->
	<div class="status">
		<p>Дамп MySQL: <b><?=$sqlDumpFile?></b> <b class="<?=(is_file($sqlDumpFile) ? 'success' : 'error')?>"><?=(is_file($sqlDumpFile) ? '' : 'Не найден')?></b></p>
	<?
	
	if(is_file($sqlDumpFile))
		$dump = file($sqlDumpFile);
	echo '<p>Загружен: '.count($dump).' строк</p>';
	
	
	// Запрос
	$sql = '';
	
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
	
		//$sqlQuerys[] = substr(trim($string), -1);
	}
	
	// Подсчет запросов
	echo '<p> Запросов: '.count($sqlQuerys).'</p>';
	
	if(!empty($sqlQuerys))
		{
			echo '<div class="spoiler">';
			foreach($sqlQuerys as $query)
			{
				echo '<div class="status">'
				.'<p>'
				.'<code>'.$query.'</code>'
				.'</p>'
				.'<p>';
				
				// Выполнить SQL
				if($connect->query($query))
					echo 'Успешно';
				else
					echo 'Ошибка: '.var_export($connect->errorInfo(), true);
				
				echo '</p>'
				.'</div>';
			}
			echo '</div>';
		}
	?>				
	</div>
	<?
}
else
{
	// Таблицы существуют
	echo '<div class="status">';
	echo '<p><u>Обнаружены таблицы</u></p>';
	foreach ($tables as $key => $value) {
		// Вывод таблиц
		echo '► '.$value[0].'<br>';
	}

	echo '</div>';
}


?>
