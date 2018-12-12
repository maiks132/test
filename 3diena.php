<?php

error_reporting(-1);
ini_set('display_errors', 'on');

$integers = array(1, 3, 5, 7, 9,
			array(10, 12, 14, 16, 18));

for($i=0; $i < count($integers); $i++)
{
	if(!is_array($integers[$i]))
	{
	echo($integers[$i]." ");
	}
}
echo("<br>----1.variants------<br>");

$i=0;
while($i<10){
	if($i%2 == 1){
		echo($i." ");
	}
	$i++;
}
while($i<20){
	if($i%2 == 0){
		echo($i." ");
	}
	$i++;
}

echo("<br>-----2.variants-----<br>");

for($i=1; $i<10; $i+=2){
	echo($i." ");
}
for($i=10; $i<20; $i+=2){
	echo($i." ");
}
echo("<br>-----3.variants-----<br>");
$i=1;
while($i<10){
	echo($i. " ");
	$i +=2 ;
}
$i=10;
while($i<20){
	echo($i. " ");
	$i +=2 ;
}


echo("<br>-----4.variants-----<br>");
$i=1;
while($i<20){
	if($i < 10){
		echo($i. " ");
	}
	else {
		echo( ($i-1) . " ");
	}
	$i += 2;
}

echo("<br>-----5.variants-----<br>");

for($i=1; $i<20; $i += 2){
	if($i < 10){
		echo($i. " ");
	}
	else {
		echo( ($i-1) . " ");
	}
}


echo("<br>-----6.variants-----<br>");

for($i=1; $i<=10; $i ++){
	if($i <= 5){
		echo( ($i*2 -1) ." ");
	}
	else {
		echo( ($i * 2 - 2) . " ");
	}
}
echo("<br>-----7.variants-----<br>");

for($i=10; $i>=1; $i--){
	if($i<=5){
		echo(($i*2-1)." ");

	}
	else{
		echo(($i+2-2)." ");
	}
}

function manafunkcija(){
	//echo("Done!<br>");
}
function manafunkcijaArParametru($var){
	//echo($var." ");
}
function manafunkvijaArNeoblogatuParametru($var = "zivis"){
	//echo($var." ");
}
function multipleParameters($a, $b = 0, $c = "c", $d = 'finito'){
	//echo($a.$b.$c.$d);
}
function kapinat($base, $pow = 2){

	$result = 1;
	for($i = 0; $i<abs($pow); $i++){
	$result *= $base;
	}
	if($pow<0){
	$result = 1/$result;
	}

	$result = round($result,2);
	//echo(" ".$result." ");
	return $result;
}

echo("<br>-----8.variants-----<br>");
$i=10;
while($i>0){
	//echo($i." ");
	$i--;
	manafunkcija();
	manafunkcijaArParametru($i);
	manafunkvijaArNeoblogatuParametru($i);
	$j = kapinat($i, -2);
	//echo($j);
	echo(" Ŗesult= ".$j.";<br>");
	//echo(++$j);
}

//echo($var);
//unset($i);
//echo(" - " .$i);
manafunkcija();
echo("<br>");
manafunkvijaArNeoblogatuParametru();
echo("<br>");
multipleParameters(1,2,3,4);
echo("<br>");
multipleParameters(1,2,3);
echo("<br>");
multipleParameters(1);

$a = 2.567;
echo(round($a)."<br>");
echo(floor($a)."<br>");

function check($var){
	if($var >5){
		return true;
	}
	return false;
}

echo((int)check($a));
 if (check($a)){
 	echo("yay");
 }
 else{
 	echo("aww");
 }
echo(check($a) + check($a));

echo("<br>----------<br>");

$salad = 'aboli bumbieri arbuzi banani tomati';
$array = explode(" ", $salad);
var_dump($array);
echo("<br>----------<br>");

$salad2 = implode(", ", $array);
var_dump($salad2);
echo("<br>----------<br>");

$string = 'Maija';
$splitstring=str_split($string);
$splitstring=implode("-", $splitstring);
$splitstring=strtolower($splitstring);
var_dump($splitstring);
?>