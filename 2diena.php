<?php
error_reporting(-1);
ini_set('display_errors', 'on');

// if(print(1)){
// 	print("yay");
// }

// veidi kā komentēt, ar slīpsvītru
# ar restīti
/*
ar slīpsvītru, zvaigznīti
*/

$koki = [
	'ābele',
	'bumbiere',
	'liepa',
	'ozoli'
		];
$majas = [
	'3' => 'Kalniņi',
	'6' => 'Berziņi'
		];
$kokuSkaits = count($koki);

echo("Mums ir: ". $kokuSkaits ." koki<br>");

$kokuSkaits -= 2;
$kokuSkaits += 1;

echo(" ");
$i = 5;
echo($i);
$i *= 2;
echo(" ");
unset($i);


echo("Pēdējā el. nr.: ". ($kokuSkaits)." ");
echo($koki[$kokuSkaits]."<br>");

$int = 0;
echo($int);
echo(" ");
echo(--$int);
echo(" ");
echo(++$int);

?>