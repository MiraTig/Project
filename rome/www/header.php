<?php 
session_start();
include('config.php');
include('conf.php');

 echo $posttitle2 = $_POST["posttitle2"];
echo $editor1 = $_POST["editor1"];
echo $smalltext = $_POST["smalltext2"];
echo $keywordsss = $_POST["keywords2"];
echo $files =  $_FILES["uploadfile"]["name"];
echo $catlist = $_POST["catlist"];



$sql = 'select * from `rome`';
$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){ 
	 $caption = $row['caption'];
	 $content = $row['content'];
	 $choose = $row['choose'];
	 $publication = $row['publication'];
	 $contact = $row['contact'];
	 $gmail = $row['g-mail'];
     $address = $row['address'];
}		

/*Создание нового поста для сайта + загрузка файла*/

   // ограничение размера файла
	$limit_size = 8*1024*1024; // 1 Mb
	// корректные форматы файлов
	$valid_format = array("jpg", "png", "gif");
	// хранилище ошибок
	$error_array = array();
	// путь до нового файла
	$path_file = "files/";
	// имя нового файла
	$rand_name = md5(time() . mt_rand(0, 9999));

	// если есть отправленные файлы
	if($_FILES){
		// валидация размера файла
		if($_FILES["uploadfile"]["size"] > $limit_size){
			$error_array[] = "Размер файла превышает допустимый!";
		}
		// валидация формата файла
		$format = end(explode(".", $_FILES["uploadfile"]["name"]));
		if(!in_array($format, $valid_format)){
			$error_array[] = "Формат файла не допустимый!";
		}
		// если не было ошибок
		if(empty($error_array)){
			// проверяем загружен ли файл
			if(is_uploaded_file($_FILES["uploadfile"]["tmp_name"])){
				// сохраняем файл
				move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $path_file . $_FILES["uploadfile"]['name']);
			}else{
				// Если файл не загрузился
				$error_array[] = "Ошибка загрузки!";
			}
		}		
	}
		
		$insert = 'INSERT INTO mposttable(posttitle, postimage, category, pagetype, authorpost, datepost, smalltext, bigtext, keywordspost)
	VALUES("'.$posttitle2.'", "'.$files.'", "'.$catlist.'", "newspage", "'.$_SESSION['username'].'", now(), "'.$smalltext.'", "'.$editor1.'", "'.$keywordsss.'")';
	$insertres = mysql_query($insert);	

?>
<DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Romstudio</title>
			<link rel="stylesheet" href="css/style.css">
			<script src="ckeditor/ckeditor.js"/></script>
		</head>
		<body >
			<header>
				<div class="fon"> </div>
				<div class="head"> </div>
				<div class="logo"> </div>
				<div class="main"></div>
				<nav>
					<a href="/"><p  id="main5" ><b> ГЛАВНАЯ </b></p></a>
					<a href="Romstudio2.html"><p id="main5" ><b> АРЕНДА СТУДИИ </b></p></a>
					<a href="Romstudio3.html"><p id="main5"  ><b> УСЛУГИ </b></p></a>
					<a href="Romstudio4.html"><p id="main5"  ><b> ПОРТФОЛИО </b></p></a>
					<a href="Romstudio5.html"><p id="main5"  ><b> КОНТАКТЫ </b></p></a>
					<?php 
					if(isset($_SESSION['id'])){
					?>
					<a href="logout.php"> <p><b>ВЫХОД</b></p></a>
					<a href="newdata.php"> <p><b> СОЗДАТЬ НОВОСТЬ </b></p></a>
					<?php 
					}else{
					?>
					<a href="login.php"><p> <b>ВХОД</b></p></a>
					<?php } ?>
				</nav>
				<span id="maintit" ><?php echo $caption;?></span>
			</header>