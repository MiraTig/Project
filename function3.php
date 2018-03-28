<?php
include('config.php');

 $postid = $_POST["id"];
 $id = $postid;

$sql = 'select * from `people`';
$result = mysql_query($sql);
	
 function noName(){
 $formid = $_POST["id"];
 
$sql = 'select * from `people` where id = "'. $formid.'"';
$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){ 
	$fname = $row['fname'];
	$name = $row['name'];
	$bdate = $row['bdate'];
	
}
  if($id = "1"){
  echo "$fname&nbsp;$name&nbsp;$bdate";
  }elseif($id = "2"){
  echo "$fname&nbsp;$name&nbsp;$bdate";
  }elseif($id = "3"){
  echo "$fname&nbsp;$name&nbsp;$bdate";
  }elseif($id = "4"){
  echo "$fname&nbsp;$name&nbsp;$bdate";
  } elseif($id = "5"){
  echo "$fname&nbsp;$name&nbsp;$bdate";
  } elseif($id = "6"){
  echo "$fname&nbsp;$name&nbsp;$bdate";
  } 
  }
 noName();
?>
<form method="post" action="">
<input type="number" name="id"/><br/>
<input type="submit" value="получить"/>
</form>
