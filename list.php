<?php

include('config.php');

echo $Photo = $_POST['Photo'];
echo $Fname = $_POST['Fname'];
echo $Name = $_POST['Name'];
echo $Date = $_POST['Date']; 
echo $Number = $_POST['Number']; 
echo $Number2 = $_POST['Number2']; 
echo $Mail = $_POST['Mail']; 
echo $Adress = $_POST['Adress']; 
echo $University = $_POST['University']; 
echo $Parents = $_POST['Parents']; 
echo $Hobby = $_POST['Hobby']; 
echo $Aboutme = $_POST['Aboutme']; 
echo $Social = $_POST['Social']; 

$sql = 'INSERT INTO `naire`(`Photo`,`Fname`, `Name`,`Date`, `Number`, `Number2`, `Mail`, `Adress`, `University`, `Parents`, `Hobby`,`Aboutme`, `Social`) VALUES ("'.$Photo.'","'.$Fname.'", "'.$Name.'", "'.$Date.'", "'.$Number.'", "'.$Number2.'", "'.$Mail.'", "'.$Adress.'", "'.$University.'", "'.$Parents.'", "'.$Hobby.'", "'.$Aboutme.'", "'.$Social.'")';
$result = mysql_query($sql);


?>

<form action="" method="post">

Фотография: <br><input name="Photo" type="text"><br>
Ваше фамилия: <br><input name="Fname" type="text"><br>
Ваше имя: <br><input name="Name" type="text"><br>
Дата рождения: <br><input name="Date" type="date"><br>
Дом.телефон: <br><input name="Number" type="text"><br>
Сот.телефон: <br><input name="Number2" type="text"><br>
Эл.почта: <br><input name="Mail" type="text"><br>
Адрес: <br><input name="Adress" type="text"><br>
Вуз: <br><input name="University" type="text"><br>
Родители: <br><input name="Parents" type="text"><br>
Хобби: <br><input name="Hobby" type="text"><br>
О себе: <br><input name="Aboutme" type="text"><br>
Соц.сети: <br><input name="Social" type="text"><br><br>

<input name="submit" type="submit" value="Добавить запись"> 
</form>









