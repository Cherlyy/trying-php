<?php

class Car {
	public $name, $brand, $colour, $speedMax, $numPassenger;

	public function addSpeed(){
		return "Speed added!";
	}  
}

class SportCar extends Car {
	public $turbo = false;

	public function runTurbo(){
		$this->turbo = true;
		return "Turbo running!";
	}
}

$car1 =  new SportCar();
echo $car1->addSpeed();
echo "<br>";
echo $car1->runTurbo();

