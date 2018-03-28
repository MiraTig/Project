<?php
include('config.php'); 

$sit = array("Алыбек к. Нурмира","Кааров Камбарбек","Исенбаева Адия","Исламов Анвар","Кочконбаев Ханболот","Федоренко Владимир");
echo "В группе учатся:&nbsp;".$sit[0].",&nbsp;".$sit[1].",&nbsp;".$sit[2].",&nbsp;".$sit[3].",&nbsp;".$sit[4].",&nbsp;".$sit[5]."!!!";


echo "</br>";
echo "</br>";


$postid = $_POST['id'];
$id = $postid;

if($id == "01"){
     echo "$sit[0]";
}elseif($id == "02"){
     echo "$sit[1]";
}elseif($id == "03"){
     echo "$sit[2]";
}elseif($id == "04"){
     echo "$sit[3]";
}elseif($id == "05"){
     echo "$sit[4]";
}elseif($id == "06"){
     echo "$sit[5]";
}

?>

<form method="post" action="">
<input type="number" name="id"/><br/>
<input type="submit" name="formbtn2" value="получить"/><br/>
</form>
