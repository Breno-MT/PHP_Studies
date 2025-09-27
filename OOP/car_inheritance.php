<?php 

class Car {
    // Properties
    public $name;
    public $brand;
    public $doors;
    public $color;

    // If a car is 2 doors, then it's a coupe (simplified for study reasons lol)
    private $coupe;    

    // Methods
    public function intro() {
        $isCoupe = $this->coupe ? "Yes" : "No";
        echo "Name: $this->name, Brand: $this->brand, Doors: $this->doors, Color: $this->color, Coupe: $isCoupe";
    }

    // Set Values
    function __construct($name, $brand, $doors, $color) {
        $this->name = $name;
        $this->brand = $brand;
        $this->doors = $doors;
        $this->color = $color;
        $this->coupe = $this->doors == 2;
    }

    // Get values
    function get_name(){
        return $this->name;
    }

    function get_brand(){
        return $this->brand;
    }

    function get_doors(){
        return $this->doors;
    }

    function get_color(){
        return $this->color;
    }

    function get_coupe(){
        return $this->coupe;
    }

}

class BMW extends Car {
    // Inheritance from Car
}

class AUDI extends Car {
    // Inheritance from Car
}

$bmw_car = new BMW("E36", "BMW", 2, "White/Black");
$bmw_car->intro();

$audi_car = new AUDI("RS6", "Audi", 4, "Blue");
$audi_car->intro();
?>