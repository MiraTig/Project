﻿<?php
include('config.php');

$sql = 'select * from `rome`';
$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){ 
	 $contact = $row['contact'];
	 $gmail = $row['g-mail'];
	 $address = $row['address'];
}		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RomStudio</title>
<link rel="stylesheet" href="Romstudio3.css" >
<link rel="stylesheet" href="menu.css" >
</head>
<body >
<header>
<div class="fon2"> 
<div class="head"> </div>
<div class="logo"> </div>
<div class="main"> </div>
<a href="RomStudio.html"><p id="main5" ><b> ГЛАВНАЯ </b></p></a>
<a href="RomStudio2.html"><p id="main" ><b> АРЕНДА СТУДИИ </b></p></a>
<a href="RomStudio3.html"><p id="main2" ><b> УСЛУГИ </b></p></a>
<a href="RomStudio4.html"><p id="main3" ><b> ПОРТФОЛИО </b></p></a>
<a href="RomStudio5.html"><p id="main4" ><b> КОНТАКТЫ </b></p></a>
</div>
</header>
<content>
<div id="content">
<span id="h1"><b>ФОТОСЪЕМКА</b></span>
<div class="service" id="service-1">
<div class="content" id="content-1"></div>
<span class="family" id="family-1"><b>СЕМЕЙНОЕ  ФОТОССЕСИЯ</b></span>
<span class="family" id="family-2">
Замечательный способ весело</br>
првести время и сохранить </br>
семейное счастье, любовь и тепло </br>
на долгие годы</span>
</div>
<div class="service" id="service2">
<div class="content" id="content2"></div>
<span class="family" id="family-1"><b>НОВОГОДНЯЯ  ФОТОСЪЕМКА</b></span>
<span class="family" id="family-2">
Одно из самых популятных</br>
новогоднихсъемок в период</br>
рожденственских праздников</span>
</div>
<div class="service" id="service3">
<div class="content" id="content3"></div>
<span class="family" id="family-1"><b>СЪЕМКА БЕРЕМЕННОСТИ</b></span>
<span class="family" id="family-2">
Чтобы фотосессия прошла легко и </br>
комфортно необходимо заранее </br>
подготовиться , Идеальное время </br>
для съемки 28-32 недели</span>
</div>
<div class="service" id="service4">
<div class="content" id="content4"></div>
<span class="family" id="family-1"><b>ДЕТСКАЯ ФОТОСЕССИЯ</b></span>
<span class="family" id="family-2">
Замечательный способ весело </br>
првести время и сохранить </br>
семейное счастье, любовь и тепло </br>
на долгие годы</span>
</div>
<div class="service" id="service5">
<div class="content" id="content5"></div>
<span class="family" id="family-1"><b>LOVE STORY ФОТОСЕССИЯ</b></span>
<span class="family" id="family-2">
Продумаем концепцию съемки </br>
love story, чтобы она была нежной </br>
и красивой:)</span>
</div>
<div class="service" id="service6">
<div class="content" id="content6"></div>
<span class="family" id="family-1"><b>СВАДЕБНАЯ ФОТОСЕССИЯ</b></span>
<span class="family" id="family-2">
Очень важно чтобы Ваша </br>
свадебная фотосессия была </br>
особенной и уникальной. Мы как </br>
раз в этом специализируемся</span>
</div>
<div class="service" id="service7">
<div class="content" id="content7"></div>
<span class="family" id="family-1"><b>МОДЕЛЬНОЕ ПАРТФОЛИО</b></span>
<span class="family" id="family-2">
Съемка для формирование у </br>
модельных агенств реального </br>
представление об особенностях </br>
фигуры и лица модели </span>
</div>
<div class="service" id="service8">
<div class="content" id="content8"></div>
<span class="family" id="family-1"><b>КАТАЛОЖНАЯ ФОТОСЪЕМКА</b></span>
<span class="family" id="family-2">
Это фотосъемка одежды, обуви и </br>
аксессуаров на модели или на </br>
невидемом манекене для инернет </br>
магазинов или кталогов</span>
</div>
<div class="service" id="service9">
<div class="content" id="content9"></div>
<span class="family" id="family-1"><b>ПРЕДМЕТНАЯ ФОТОСЪЕМКА</b></span>
<span class="family" id="family-2">
Качественные фотографии </br>
предметов смогут увеличить </br>
продачи на 75%</span>
</div>
<div class="service" id="service10">
<div class="content" id="content10"></div>
<span class="family" id="family-1"><b>FOOD ФОТОГРАФИИ</b></span>
<span class="family" id="family-2">
Особенная съемка еды,блюд, </br>
напитков или ингредиентов для </br>
меню или сайта ресторана, кафе </br>
или паба</span>
</div>
<div class="service" id="service11">
<div class="content" id="content11"></div>
<span class="family" id="family-1"><b>БИЗНЕС ПОРТРЕТ</b></span>
<span class="family" id="family-2">
Корпоративная фотосъемка </br>
является необходимо для </br>
современного бизнеса</span>
</div>
<div class="service" id="service12">
<div class="content" id="content12"></div>
<span class="family" id="family-1"><b>РЕПОРТАЖНАЯ СЪЕМКА</b></span>
<span class="family" id="family-2">
Качественно сохраняем </br>
атмосферу события на фото</span>
</div>
</div>
</content>
<footer>
<div class="foot2"></div>
<div class="logo3"></div>
<div id="mail2"><b>Пишите нам:</br><?php echo $gmail;?></b></div>
<div id="number2"><b>Звоните</br><?php echo $contact;?></b></div>
<div id="adress2"><b>Приходите:</br><?php echo $address;?></b></div>
<div id="social2"><b>Мы в соц.сетях</b></div>
<div class="fb2"></div>
<div class="tw2"></div>
<div class="vk2"></div>
<div class="yt2"></div>
</footer>
</body>
</html>