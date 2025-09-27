<?php

class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }

}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");

// Other way of declaring the property of a class
$apple->name = "Not Apple";


echo $apple->get_name();
echo $apple->get_color();

?>