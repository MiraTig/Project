<?php
include('config.php');

echo $fname = $_POST["fname"];
echo $name = $_POST["name"];
echo $bdate = $_POST["bdate"]; 

$sql = 'select from `people`(`fname`, `name`,`bdate`) VALUES ("'.$fname.'", "'.$name.'", "'.$bdate.'")';
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){ 
	$fname = $row['Fname'];
	$name = $row['Name'];
	$bdate = $row['bdate'];
	
}
 function noName(){
 $fname = "Исенбаева";
  if($fname = "Исенбаева"){
  echo "это правильно";
  }else{
  echo "это неправильно";
  }
  $name = "Адия";
  if($name = "Адия"){
  echo "это правильно";
  }else{
  echo "это неправильно";
  }
  $bdate = "17.09.2001";
  if($bdate = "17.09.2001"){
  echo "это правильно";
  }else{
  echo "это неправильно";
  }
 }
 
?>

<form method="post" action="">
<input type="text" name="fname"/><br/>
<input type="text" name="name" /><br/>
<input type="date" name="bdate"/><br/>
<input type="submit" value="получить"/>
</form>