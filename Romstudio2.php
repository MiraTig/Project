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
<link rel="stylesheet" href="Romstudio2.css">
<link rel="stylesheet" href="menu.css">
</head>
<body >
<header>
<div class="fon2"> 
<div class="head"> </div>	
<div class="logo"> </div>
<div class="main"></div>
<a href="RomStudio.html"><p id="main5" ><b> ГЛАВНАЯ </b></p></a>
<a href="RomStudio2.html"><p id="main" ><b> АРЕНДА СТУДИИ </b></p></a>
<a href="RomStudio3.html"><p id="main2" ><b> УСЛУГИ </b></p></a>
<a href="RomStudio4.html"><p id="main3" ><b> ПОРТФОЛИО </b></p></a>
<a href="RomStudio5.html"><p id="main4" ><b> КОНТАКТЫ </b></p></a>
</div>
</header>
<content>
<div id="content">
<span id="h2-1" class="h2"><b>ЗАЛЫ В СТИЛЕ ЭКЛИПС</b></span>
<span id="h2-2" class="h2"><b>ЗАЛЫ В СТИЛЕ РИГА</b></span>
<span id="h2-3" class="h2"><b>ЗАЛЫ В СТИЛЕ WHITE</b></span>
<span id="h2-4" class="h2"><b>ЗАЛЫ В СТИЛЕ ВЕГА</b></span>
<div class="hover">
<div class="eclips" ></div>
<span id="price"><b>1700 сом/час 100м2</b></span>

</div>
<div class="service" id="eclips2"></div>
<div class="service" id="eclips3"></div>
<div class="service" id="eclips4"></div>
<div class="service" id="eclips5"></div>
<div class="riga"></div>
<span id="price2"><b>1300 сом/час 110м2</b></span>
<div class="service" id="riga2"></div>
<div class="service" id="riga3"></div>
<div class="service" id="riga4"></div>
<div class="service" id="riga5"></div>
<div class="white"></div>
<span id="price3"><b>1500 сом/час 110м2</b></span>
<div class="service" id="white2"></div>
<div class="service" id="white3"></div>
<div class="service" id="white4"></div>
<div class="service" id="white5"></div>
<div class="vega"></div>
<span id="price4"><b>1400 сом/час 50м2</b></span>
<div class="service" id="vega2"></div>
<div class="service" id="vega3"></div>
<div class="service" id="vega4"></div>
<div class="service" id="vega5"></div>
</div>
</content>
<footer>
<div class="foot">
<div class="logo3"></div>
<div id="mail2"><b>Пишите нам:</br><?php echo $gmail;?></b></div>
<div id="number2"><b>Звоните</br><?php echo $contact;?></b></div>
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