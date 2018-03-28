<?php
include('config.php');

echo $Fname = $_POST["Fname"];
echo $Name = $_POST["Name"];
echo $Date = $_POST["Date"]; 
echo $Number = $_POST["Number"]; 
echo $Number2 = $_POST["Number2"]; 
echo $Mail = $_POST["Mail"]; 
echo $Adress = $_POST["Adress"]; 
echo $University = $_POST["University"]; 
echo $Parents = $_POST["Parents"]; 
echo $Hobby = $_POST["Hobby"]; 
echo $Aboutme = $_POST["Aboutme"]; 
echo $Social = $_POST["Social"]; 
echo $MyFile = $_POST["MyFile"]; 



// ограничение размера файла
	$limit_size = 1*1024*1024; // 1 Mb
	// корректные форматы файлов
	$valid_format = array("jpeg", "jpg", "gif", "png");
	// хранилище ошибок
	$error_array = array();
	// путь до нового файла
	$path_file = "/";
	// имя нового файла
	$rand_name = md5(time().mt_rand(0, 9999));

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

   
$sql = 'INSERT INTO `naire`(`Photo` , `Fname` , `Name` , `Date`, `Number`, `Number2`, `Mail`, `Adress`, `University`, `Parents`, `Hobby`,`Aboutme`, `Social`) VALUES ("'.$MyFile.'","'.$Fname.'", "'.$Name.'", "'.$Date.'", "'.$Number.'", "'.$Number2.'", "'.$Mail.'", "'.$Adress.'", "'.$University.'", "'.$Parents.'", "'.$Hobby.'", "'.$Aboutme.'", "'.$Social.'")';
$result = mysql_query($sql);
	


?>
<style>
.background {
    width: 1956px;
    height: 1000px;
	background-image:url(cloud.png);
	background-repeat: no-repeat;
}
#input {
    width:300px;
	height:30px;
	border: 1px solid #73b52a;
}
.input {
    margin: 140px 0 0 800px;
}
.input2 {
	margin: 10px 0 0 800px;
}
.input3 {
	margin: 10px 0 0 800px;
	width:300px;
	height:80px;
	border: 1px solid #73b52a;
}
.input4 {
	height:30px;
	border: 1px solid #73b52a;
	margin: 10px 0 0 800px;
}
p {
    position:absolute;
	left:810px;
	top: 120px;
	color:#fff;
	font-family:Tahoma;
}

</style>
<body class="background"></body>
<p><b>АНКЕТА</b></p>
<form method="post" action="">
<input type="text" name="Fname" placeholder="Фамилия" class="input" id="input"/><br/>
<input type="text" name="Name" placeholder="Имя" class="input2" id="input"/><br/>
<input type="date" name="Date" placeholder="Дата рож." class="input4"/><br/>
<input type="text" name="Number" placeholder="Дом.телефон" id="input" class="input2"/><br/>
<input type="text" name="Number2" placeholder="Сот.телефон" id="input" class="input2"/><br/>
<input type="text" name="Mail" placeholder="Эл.почта" id="input" class="input2"/><br/>
<input type="text" name="Adress" placeholder="Адресс" id="input" class="input2"/><br/>
<input type="text" name="University" placeholder="Вуз" id="input" class="input2"/><br/>
<input type="text" name="Parents" placeholder="Родители" id="input" class="input2"/><br/>
<input type="text" name="Hobby" placeholder="Хобби" id="input" class="input2"/><br/>
<input type="textarea" name="Aboutme" placeholder="О себе" class="input3"/><br/>
<input type="text" name="Social" placeholder="Соц.сети" id="input" class="input2"/><br/>
<input type="file" name="MyFile" placeholder="" class="input2"/><br/>
<input type="submit" name="formbtn" class="input2"/>
</form>

