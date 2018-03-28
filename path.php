<?php
// ограничение размера файла
	$limit_size = 20*1024*1024; // 1 Mb
	// корректные форматы файлов
	$valid_format = array("jpeg", "jpg", "gif", "png");
	// хранилище ошибок
	$error_array = array();
	// путь до нового файла
	$path_file = "tables/naire";
	// имя нового файла
	$rand_name = md5(time() . mt_rand(0, 9999));

	// если есть отправленные файлы
	if($_FILES){
		// валидация размера файла
		if($_FILES["upload_file"]["size"] > $limit_size){
			$error_array[] = "Размер файла превышает допустимый!";
		}
		// валидация формата файла
		$format = end(explode(".", $_FILES["upload_file"]["name"]));
		if(!in_array($format, $valid_format)){
			$error_array[] = "Формат файла не допустимый!";
		}
		// если не было ошибок
		if(empty($error_array)){
			// проверяем загружен ли файл
			if(is_uploaded_file($_FILES["upload_file"]["tmp_name"])){
				// сохраняем файл
				move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path_file . $_FILES["upload_file"]['name'] . ".$format");
			}else{
				// Если файл не загрузился
				$error_array[] = "Ошибка загрузки!";
			}
		}		
	}
?>