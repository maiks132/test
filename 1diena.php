<?php 

error_reporting(-1);
ini_set('display_errors', 'on');


//print(1);
//print('1');
//print("1");

//echo($foo);

//$bar = '1';
//echo("\n");
//echo($bar);

//echo ($foo + $bar);
//echo("\n");

//echo ($foo . $bar);
//echo("\n");

//$myArray = ["one", "two", "three"];

//print_r($myArray);
//print_r("\n el [1] is". $myArray[1]);

//$myArray2 = ['1' => 'one', '2' => 'two', '3' => 'three'];
//print_r($myArray2);
//print_r("\n el [1] is". $myArray2[1]);

$myArray3 = [
	'Vārds' => 'Joe', 
	'uzvards' => 'Doe', 
	'phone' => '12345678', 
	'hobiji' => [
		'sleposana', 
		'snowbords', 
		'ritenbrauksana'],
	'epasti' => [
		'example@email.com',
		'example2@email.com'],
	'epasti2' => [
		'example@email.com',
		'example2@email.com'],
	'epasti3' => [
		'example@email.com',
		'example2@email.com']

];

//print_r(
	//$myArray3['vards'] . " ".
	//$myArray3['uzvards'] . " ".
	//" telefona nummurs ir " . 
	//$myArray3['phone']
	//. " un hobiji ir " .
	//$myArray3['hobiji']
//);

//if (1 == '1') {
//	echo 'yes';
//	else {
//		echo 'no'
//	}
//}
foreach ($myArray3 as $key => $value) {

	if( !is_array($value) ){
		echo "<h2>".$key.":</h2>";
		print($value."<br>");
		//echo "<strong><u>".$value."</u></strong>";

	}
	else {
		echo "<h2>".$key.":</h2>";
		


		//print_r($value);
		//echo('Te sākas hobiju printēšana:');

		foreach ($value as $key2 => $value2) {
			print($value2. "<br>");

		}
	}
	
}


$flag = 6;
if($flag >= 5){
	echo('yay');
}
elseif ($flag <= 4) {
	echo ('yay2');
}
else {
	echo('NaNN???');
}

switch ($flag) {
	case 1:
		echo(' 1. ātrums');
		break;
	case 5:
		echo(' 5. ātrums');
		break;
	case 6:
		echo(' 6. ātrums');
		break;	
	
	default:
		echo('nav ātrums vai arī ir dīvains ātrums');
		break;
}
//print_r( 1 + "1");				

echo "Hello World";
//print("Hello");


?>