<?php 
session_start();
require_once'header.php';
?>
		<main class="content">
				<form method="post" action="check.php" class="myform">
					<input type="number" name="id" class="authelemnts" placeholder="Ваш ID"/><br>
					<input type="password" name="password" class="authelemnts" placeholder="Пароль"/><br/>
					<input type="submit" name="login" class="authbutton"/>
				</form>
		</main>
<?php
require_once'footer.php';
?>