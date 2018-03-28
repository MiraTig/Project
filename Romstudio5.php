<?php
include('config.php');

$sql = 'select * from `rome`';
$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){ 
	 $contact = $row['contact'];
	 $phone = $row['phone'];
	 $phone2 = $row['phone2'];
	 $phone3 = $row['phone3'];
	 $gmail = $row['g-mail'];
	 $mail = $row['g-mail'];
	 $address = $row['address'];
}		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RomStudio</title>
<link rel="stylesheet" href="Romstudio5.css">
</head>
<body >
<header>
<div class="fon2"> 
<div class="head"> </div>
<div class="logo"> </div>
<div class="main"></div>
<a href="RomStudio.php"><p id="main5" ><b> ГЛАВНАЯ </b></p></a>
<a href="RomStudio2.php"><p id="main" ><b> АРЕНДА СТУДИИ </b></p></a>
<a href="RomStudio3.php"><p id="main2" ><b> УСЛУГИ </b></p></a>
<a href="RomStudio4.php"><p id="main3" ><b> ПОРТФОЛИО </b></p></a>
<a href="RomStudio5.php"><p id="main4" ><b> КОНТАКТЫ </b></p></a>
</div>
</header>
<content>
<div id="content">
<span id="h1"><b>ПРИХОДИТЕ, МЫ ЖДЕМ ИМЕННО ВАС!</b></span>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1229.4928641122765!2d74.6007083275886!3d42.86770811835666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7d0ee324cd7%3A0x342d77015ed97c1c!2z0YPQuy4g0J_QsNC90YTQuNC70L7QstCwLCAxNTkg0YPQuy4g0JHQvtC60L7QvdCx0LDQtdCy0LAsINCR0LjRiNC60LXQug!5e0!3m2!1sru!2skg!4v1513738158361" width="912" height="632" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>
<div id="infocontact">
<span id="contact"><b>КОНТАКТЫ</b></span>
<div class="fon3"></div>
<div class="contact" id="cont"></div>
<span id="detail" class="detail"><b>По вопросам аренды:</br>           
<?php echo $phone;?></br>
<?php echo $phone2;?></br>
По вопросам съемок: </br>
<?php echo $phone3;?></br>
(прием звонков с 10.00 — 18.00)</b></span>
<div class="contact" id="cont2"></div>
<span id="detail" class="detail2"><b><?php echo $gmail;?></br>
<?php echo $mail;?></b></span>
<div class="contact" id="cont3"></div>
<span id="detail" class="detail3"><b><?php echo $address;?></b></span>
<span id="contact2">МЫ ЖДЕМ ВАС!!!</span>
</div>
</div>
</content>
<footer>
<div class="foot2">
<div class="logo3"></div>
<div id="mail2"><b>Пишите нам:</br><?php echo $gmail;?></b></div>
<div id="number2"><b>Звоните</br><?php echo $number;?></b></div>
<div id="adress2"><b>Приходите:</br><?php echo $address;?></b></div>
<div id="social2"><b>Мы в соц.сетях</b></div>
<div id="soc" class="fb2"></div>
<div id="soc" class="tw2"></div>
<div id="soc" class="vk2"></div>
<div id="soc" class="yt2"></div>
</div>
</footer>
</body>
</html>