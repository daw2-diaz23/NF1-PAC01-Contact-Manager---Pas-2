<?php
// https://www.youtube.com/watch?v=yPd-t9YoKwM
// https://www.youtube.com/playlist?list=PLs22jecupX27jocUYX7HOHPTFNjjUBeLD

class Person{
	var $age;
	var $eye_color;
	var $name;

	private $ages;
    private $one;
	private $two =3;
	protected $three =3;

	private $word;
    private $haha;
    private $world;


	static $population = 0;
	static $people = 20;

	public function __set($property, $value){
        if((property_exists($this, $property)) && ($value >= 0 ) && ($value <=50)){
            echo "Your succesfuly updated {$property} to  {$value}.";
        }else{
            echo "Failed to update {$property }.";
        }
    }

	public function __get($property){
        echo "You tried to update or access {$property}.";

    }

	public function __construct($age, $eye_color){
		$this->age = $age; 
		$this->eye_color = $eye_color;
		echo "This is the age: " . $this->age . "<br/>";
		echo "This is the eye color: " . $this->eye_color . "<br/>"; 
		self::$population++;
		echo "This is the current number of instance: " . self::$population;
	}

	static public function say_population(){
		echo "This is the population: " . self::$population;
	}

	function sayNums(){
		echo $this->one;
		echo $this->two;
		echo $this->three;
	}

	function say_age(){
		echo "This is the age: " . $this->age;
	}
}

$dude = new Person(22,"Brown");
$girl = new Person(44,"Blue");
$bob = new Person(55,"Green");


echo "<br>";
$dude ->word = 6;
echo "<br>";
$dude ->word;
echo "<br>";
$dude->haha = 55;
echo "<br>";
$dude->haha = 10;
echo "<br>";
$dude-> ages = 7;
echo "<br>";
$dude-> one = 5;
echo "<br>";
$dude-> two = 4;
echo "<br>";
$dude-> three = 6;
echo "<br>";
$dude-> population = 10;
echo "<br>";
$dude ->world = 9;
echo "<br>";




$Pau = new Person(7,"Blue");
$Jose = new Person(12,"Green");
$Fran = new Person(20,"Brown");