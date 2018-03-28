<?php error_reporting(0);
# настройки
define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'rome');
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die ("MySQL Error: " . mysql_error());
mysql_query("set names utf8") or die ("<br>Invalid query: " . mysql_error());
mysql_select_db(DB_NAME) or die ("<br>Invalid query: " . mysql_error()); 

header('Content-Type: text/html; charset=utf-8');

# массив ошибок
$error[0] = 'Я вас не знаю';
$error[1] = 'Включи куки';
$error[2] = 'Тебе сюда нельзя';
?>