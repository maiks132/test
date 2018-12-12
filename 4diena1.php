<?php

error_reporting(-1);
ini_set('display_errors', 'on');

class Human{

	//protected
	//private
	public $first_name = "Joe";
	public $last_name;
	public $age;

	public function getFirstName(){
		return ($this->first_name."!");
	}
	public function setFirstName($value){
		$this->first_name = $value;
	}
	public function getLastName(){
		return ($this->last_name."!");
	}
	public function setLastName($value){
		$this->last_name = $value;
	}
	public function getName(){
		return ($this->first_name ." ". $this->last_name);
	}
	public function setName($fname, $lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
	}
	public function setAge($years){
		$this->age = ($years);
	}
}

$test = new Human;
// var_dump($test);
// echo($test->first_name);
// echo("<br>");
// echo($test->getFirstName());
// echo("<br>");
echo($test->setFirstName("Ādams"));
echo($test->setLastName("Ādamsons"));
echo($test->getName());
echo(" ");

$ieva = new Human;
$ieva->setName("Ieva", "Ādamsone");
echo($ieva->getName());


$ieva->setAge(21);

// if(1 == "1"){
// 	$var = 1;
// }
// else{
// 	$var = 2;
// }
// echo($var);
// $var = (1 =="1") ? 1:2;

// echo($var);

?>