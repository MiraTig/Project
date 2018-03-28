<?php
/*--include("conf.php");--*/
include("config.php");

     /*-- $sql='SELECT * FROM people where id="3"';
      $result = $link->query($sql);
	  if ($result->num_rows > 0)
	  {
	      $row = $result->fetch_assoc();
		  echo $fname = $row['fname']."&nbsp";
		  echo $name = $row['name']."&nbsp;-&nbsp";
		  echo $bdate = $row['bdate'];
		  Удалить
	  }
	 ---*/ 
	  $sql='SELECT * FROM people';
	  $res = mysql_query($sql);
	  while($rr = mysql_fetch_array($res)){
	  echo$rr['id'].".";
	  echo$title = $rr['fname']."&nbsp;";
	  echo$notes = $rr['name']."&nbsp;-&nbsp;";
	  echo$author = $rr['bdate']."</br>";
	  }
	  
	  echo $familyname = $_POST["familyname"];
	  echo $username = $_POST["username"];
	  echo $userdate = $_POST["userdate"];
	  
	  
	  $sql='insert into people(fname,name,date)values("'.$familyname.'","'.$username.'","'.$userdate.'")';
	  $result= mysql_query($sql);
	  ?>
	  <form method="post" action="">
	  <input type="text" name="familyname"/><br/>
	  <input type="text" name="username"/><br/>
	  <input type="date" name="userdate"/><br/>
	  <input type="submit" name="form"/>
	  </form>
	  
	  
	  <form method="post" action="change.php">
      <input type="text" name="userid"/><br/> 
      <input type="submit" name="formbtn2"/><br/> 
      </form>
      <a href="">Поменять</a>
	  
	