﻿<?php
include('config.php');

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

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RomStudio</title>
<link rel="stylesheet" href="Romstudio.css">
</head>
<body >
<header>
<div class="fon"> 
<div class="head"> </div>
<div class="logo"> </div>
<div class="main"></div>
<a href="RomStudio.html"><p id="main5" ><b> ГЛАВНАЯ </b></p></a>
<a href="RomStudio2.html"><p id="main" ><b> АРЕНДА СТУДИИ </b></p></a>
<a href="RomStudio3.html"><p id="main2" ><b> УСЛУГИ </b></p></a>
<a href="RomStudio4.html"><p id="main3" ><b> ПОРТФОЛИО </b></p></a>
<a href="RomStudio5.html"><p id="main4" ><b> КОНТАКТЫ </b></p></a>
<span id="content" ><?php echo $caption;?></span>
</div>
</header>
<content>
<div class="content">
<div class="back">
<div class="bsl6"><ul class="body_slides">
	<li></li>
<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>	
</div>
</div>
  <div class="info">
    <span id="content2"><b><?php echo $content;?></b></span>
      <span id="content3"><center><?php echo $choose;?></center></span>
  </div>
  
<div class="back2"> 
<span id="content4"><b>ПОЧЕМУ ВЫБИРАЮТ НАС</b></span>
<div class="cause"> </div>
<span id="content5">Хорошее  естественное  освящение</span>
<div class="cause2"> </div>
<span id="content6">Современное съемочное оборудование</span>
<div class="cause3"> </div>
<span id="content7">Эксклюзивные интерьерные решения </br>
и крутой реквизит</span>
<div class="cause4"> </div>
<span id="content8"> Климат-контроль Wi-Fi, горячие напит-</br>
 ки и кулер с водой</span>
<div class="cause5"> </div>
<span id="content9">Большая гримерная</span>
<div class="cause6"> </div>
<span id="content10">Общая площадь 350 кв.м</span>
</div>

<div class="publication">
<span id="h1"><b>СВЕЖИЕ ПУБЛИКАЦИИ</b></span>
<div class="news"></div>
<span id="news" ><b>Новогодняя фотосессия </br>
самая волшебная</b></span>
<div class="news2"></div>
<span id="news2"><b>Семейная фотосессия: </br>
как все происходит?</b></span>
<div class="news3"></div>
<span id="news3"><b>Как подготовить ребенка </br> 
к детской фотосессии</b></span>

<span class="shortdescription">
Желтый листопад скоро сменится снегопадом. </br>
А до лучшей поры года – новогодних и </br>
Рождественских праздников – останется совсем </br>
 чуть времени! В предпраздничную пору все </br>
мы начинаем подыскивать подарки родным и </br>
любимым людям, стремясь порадовать их </br>
чем-то оригинальным и хотя бы немного </br>
сказочным.</span>
<span class="shortdescription2">
Студия – оптимальное место для семейной </br>
фотосессии. Если, конечно, домашний интерьер </br>
не подходит. В студии созданы все условия для </br>
получения красивых, «теплых» и романтичных </br>
снимков. Уютная обстановка, множество </br>
профессионального реквизита и специали- </br>
зированного оборудования дает возможность </br>
сделать разнообразные снимки.</span>
<span class="shortdescription3">
С появлением ребенка, любой родитель </br>
мечтает приобрести навыки фотографа, </br>
что бы ежедневно….ежечасно фотографировать </br>
своего малыша! Ведь время так быстротечно, </br>
дети растут и меняются невероятно быстро. </br>
И запечатлеть любимую улыбку  —  </br>
естественное желание любой мамы.</span>
<a href="RomStudio6.html"><div class="detail" id="detail"><center>подробно...</center></div></a>
<a href="RomStudio7.html"><div class="detail2" id="detail2"><center>подробно...</center></div></a>
<a href="RomStudio8.html"><div class="detail3" id="detail3"><center>подробно...</center></div></a>
</div>
</content>

<footer>
<div class="foot">
<div class="logo2"></div>
<div id="mail"><b>Пишите нам:</br><?php echo $gmail;?></b></div>
<div id="number"><b>Звоните</br><?php echo $number;?></b></div>
<div id="adress"><b>Приходите:</br><?php echo $address;?></b></div>
<div id="social"><b>Мы в соц.сетях</b></div>
<div id="soc" class="fb"></div>
<div id="soc" class="tw"></div>
<div id="soc" class="vk"></div>
<div id="soc" class="yt"></div>
</div>
</footer>
</body>
</html>