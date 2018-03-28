<?php
include('config.php');

$sql = 'select * from people';
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
	echo $id = $row['id'].".";
	echo $fname = $row['fname'];
	echo $name = $row['name']."&nbsp;-&nbsp;";
	echo $date = $row['bdate']."год. рождения &nbsp; &nbsp;&nbsp; <br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo $familyname = $_POST["familyname"];
echo $username = $_POST["username"];
echo $userdate = $_POST["userdate"]; 
 


echo $familyname2 = $_POST["familyname2"];
echo $username2 = $_POST["username2"];
echo $uid= $_GET["uid"];

$sql = 'update people set fname = "'.$familyname2.'", name = "'.$username2.'" where id="'.$uid.'"';
$result = mysql_query($sql);

   if(isset($familyname) && isset($username)){
   $sql = 'insert into people(fname,name,date)values("'.familyname.'","'.$username.'","'.$userdate.'")';
   $result = mysql_query($sql);
   echo "<br/><strong>Ваша форма пуста, СЭР!</strong>"
?>

<form method="post" action="">
<input type="text" name="familyname"/><br/>
<input type="text" name="username" /><br/>
<input type="date" name="userdate"/><br/>
<input type="submit" name="formbtn"/>
</form>
<?php
}else{ "Ваша форма пуста,СЭР!<br/>Заполните форму пожалуйста,СЭР!";
?>
<form method="post" action="">
<input type="text" name="familyname"/><br/>
<input type="text" name="username" /><br/>
<input type="date" name="userdate"/><br/>
<input type="submit" name="formbtn"/>
</form>
<?php } ?>

<form method="post" action="change.php">
<input type="text" name="userid"/><br/> 
<input type="submit" name="formbtn2"/><br/> 
</form>