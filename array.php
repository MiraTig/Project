<?php
include('config.php');

$sit = array("Кааров Камбар","Алыбек к. Нурмира","Исенбаева Адия","Исламов Анвар","Кочконбаев Ханболот");
echo "В группе учатся:&nbsp;".$sit[0].",&nbsp;".$sit[1].",&nbsp;".$sit[2].",&nbsp;".$sit[3].",&nbsp;".$sit[4]."!";

echo "</br>";
echo "</br>";

echo count($sit);

echo "</br>";
echo "</br>";

$arrlength = count($sit);

for($x = 0; $x < $arrlength; $x++) {
    echo $sit[$x];
	echo "</br>";
}
echo "</br>";

$age = array("Камбарбек"=>"18","Нурмира"=>"17","Ханболот"=>"15");
echo "Ханболот " . $age['Ханболот']. " лет.";
echo "</br>";
echo "</br>";

foreach($age as $x => $x_value){
    echo"Ключ=" . $x . ",значение=". $x_value;
	echo "<br/>";

}
echo "</br>";
echo "</br>";

$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

echo $cars[0][0].": В начилии: ".$cars[0][1].",Продано: ".$cars[0][2].".<br>";
echo $cars[1][0].": В начилии: ".$cars[1][1].",Продано: ".$cars[1][2].".<br>";
echo $cars[2][0].": В начилии: ".$cars[2][1].",Продано: ".$cars[2][2].".<br>";
echo $cars[3][0].": В начилии: ".$cars[3][1].",Продано: ".$cars[3][2].".<br>";




?>