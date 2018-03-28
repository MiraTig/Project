<?php

$postmonth = $_POST['month'];
$month = $postmonth;
 

if($month == "01"){
     echo "Январь";
}elseif($month == "02"){
     echo "Февраль";
}elseif($month == "03"){
     echo "Март";
}elseif($month == "04"){
     echo "Апрель";
}elseif($month == "05"){
     echo "Май";
}elseif($month == "06"){
     echo "Июнь";
}elseif($month == "07"){
     echo "Июль";
}elseif($month == "08"){
     echo "Август";
}elseif($month == "09"){
     echo "Сентябрь";
}elseif($month == "10"){
     echo "Октябрь";
}elseif($month == "11"){
     echo "Декабрь";
}elseif($month == "12"){
     echo "Happy New Year";
}
?>

<form method="post" action="">
<input type="text" name="month"/><br/>
<input type="submit" name="formbtn2"/><br/>
</form>
