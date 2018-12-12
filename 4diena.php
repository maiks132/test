<?php

error_reporting(-1);
ini_set('display_errors', 'on');

function manafunkcija($string = 'Veikals'){
	//echo($string);
	$splitstring=str_split($string);
	// echo($splitstring);
foreach ($splitstring as $key => $value) {
	if($key%2==0){
		$splitstring[$key] = strtoupper($splitstring[$key]);
	}
	else{
		$splitstring[$key] = strtolower($splitstring[$key]);
	}
	echo($splitstring[$key]." ");
}
echo("<br>");
print_r($splitstring);
echo("<br>");
$finalarray = implode(" ", $splitstring);
echo($finalarray."<br>");
}
$var='Veikals';
$result = manafunkcija($var);
echo($result);


echo("<br>");
?>