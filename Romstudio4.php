	<html>
		<head>
			<meta charset="utf-8">
			 <title>Romstudio2</title>
			  <link rel="stylesheet" href="Romstudio4.css">
		</head>
		<body >
			<header>
				<div class="fon2"> </div>
				<div class="head"> </div>
				<div class="logo"> </div>
				<div class="main"></div>
				<nav>
					<a href="index.php"><p  id="main" ><b> ГЛАВНАЯ </b></p></a>
					<a href="indexhall.php"><p id="main"><b> АРЕНДА СТУДИИ </b></p></a>
					<a href="Romstudio3.php"><p id="main"><b> УСЛУГИ </b></p></a>
					<a href="Romstudio4.php"><p id="main"><b> ПОРТФОЛИО </b></p></a>
					<a href="Romstudio5.php"><p id="main"><b> КОНТАКТЫ </b></p></a>
					
					<?php 
					if(isset($_SESSION['id'])){
					?>
					<a href="logout.php"> <p><b>ВЫХОД</b></p></a>
					<a href="newdata.php"> <p><b> СОЗДАТЬ НОВОСТЬ </b></p></a>
					<?php 
					}else{
					?>
					<a href="login.php"><p id="main"> <b>ВХОД</b></p></a>
					<?php } ?>
				</nav>
				<span id="maintit" ><?php echo $caption;?></span>
			</header>