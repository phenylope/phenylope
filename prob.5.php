<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage; 
    public stattic $fuelType = "Diesel";

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
}

class Bus extends Vehicle {
  
}
class Car extends Vehicle {
  
}
echo Vehiclle::$fuelType;
?>