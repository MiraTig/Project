<?php
include('config.php');
echo $userid = $_POST["userid"];

$sql = "select fname, name from people where id=".$userid;
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){ 
	$fname = $row['fname'];
	$name = $row['name'];
}
?>

<form method="post" action="index2.php?uid=<?php echo $userid;?>">
<input type="text" name="familyname2" value="<?php echo $fname; ?>"/><br/>
<input type="text" name="username2" value="<?php echo $name; ?>" /><br/>
<input type="submit" name="formbtn"/>
</form>