<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
    public function fare($seatingCapacity) {
        return $seatingCapacity * 100;
    }
}

class Bus extends Vehicle {
   public function fare($seatingCapacity = 50) {
      $totalfare = parent::fare($seatingCapacity);
      $maintenanceCharge = $totalfare * 0.10;
      return $totalfare + $maintenanceCharge;
   }
}

$bus = new Bus("City Bus", 80, 10);
echo $bus->fare( ); // Output: 5500
?>