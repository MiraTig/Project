<?php
include('config.php');

echo $fname = $_POST["fname"];
echo $name = $_POST["name"];
echo $bdate = $_POST["bdate"]; 

$sql = 'select * from `people`';
$result = mysql_query($sql);

while($row = mysql_fetch_array($result)){ 
	$fname = $row['fname'];
	$name = $row['fame'];
	$bdate = $row['bdate'];
	
}
 function noName(){
$sql = 'select * from `people`';
$result = mysql_query($sql);

while($row = mysql_fetch_array($result)){ 
	echo $fname = $row['fname']."&nbsp;";
	echo $name = $row['fame']."-";
	echo $bdate = $row['bdate']."<br/>";
	
}
 echo "<br/>";
 echo "<br/>";
 echo "<br/>";
 
  if($fname = "Исенбаева"){
  echo "это правильно<br/>";
  }else{
  echo "это неправильно<br/>";
  } 
  if($name = "Адия"){
  echo "это правильно<br/>";
  }else{
  echo "это неправильно<br/>";
  } 
  if($bdate = "2001-09-17"){
  echo "это правильно<br/>";
  }else{
  echo "это неправильно<br/>";
  }
 }
 noName();
?>