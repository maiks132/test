<?php
error_reporting(-1);
ini_set('display_errors', 'On');
class Device{
	public $year;
	public $manufacturer;
	public static $all_manufacturers;
	// protected $servername etc
	function __construct($id = null){
		// print("Parent Construction!");
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$db = "programmesana";
		$conn = mysqli_connect($servername, $username, $password, $db);
		$sql = "SELECT * FROM `microphone` where id=$id";
		$result = $conn->query($sql);
		// var_dump($result);
		if($result->num_rows>0){
			// echo('Ir rezultāts! - - - - - ');
	   		while($row = $result->fetch_assoc()) 
	   		{
	   			// var_dump($row);
	   			$this->setYear($row['years']);
	   			$this->setManufacturer($row['manufacturer']);
	   			// $this->setColor($row['color']);
	   		}
	        
	    
		}
		else{
			echo("Nav rezultāts");
		}
	}
	
	public function getYear(){
		return $this->year;
	}
	public function setYear($year){
		$this->year = $year;
	}
	public function getManufacturer(){
		return $this->manufacturer;
	}
	public function setManufacturer($company){
		$this->manufacturer = $company;
	}
	public function getFullInfo(){
		return ($this->manufacturer . " " . $this->year);
	}
	public static function getAllManufacturers(){
		
		//db?
		return ["Siemens", "Bosch", "Apple", "Audi"];
		// return array("Siemens", "Bosch", "Apple", "Audi");
	}
}
class Microphone extends Device{
	public $color;
	// function __construct(){
	// 	parent::__construct();
	// 	// print("Child Construction!");
	// }
	public function getFullInfo(){
		return ($this->manufacturer . " " . $this->year . " ( mikrofons! ) ");
	}
}
// $device = new Device();
// $device->setYear(2017);
// $device->setManufacturer("Siemens");
// print($device->getFullInfo());
// var_dump(Device::getAllManufacturers());
$mikrofons = new Microphone(2);
// $mikrofons->setYear(2016);
// $mikrofons->setManufacturer("Samsung");
print($mikrofons->getFullInfo());

?>