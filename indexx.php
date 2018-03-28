<?php
session_start();


if(!isset($_SESSION['id'])){
?>
<form method="post" action="check.php">
<input type="number" name="id" placeholder="id"/><br/>
<input type="number" name="password" placeholder="password"/><br/>
<input type="submit" value="get"/>
</form>

<?php
}else{
	echo "User Name ". $_SESSION['username'];
	echo '<br/>';
	echo '<a href="logout.php">LogOUT</a>';
}

?>