<?php

// creating a class.
class Fruit {
  // creating the class properties.
    public $name;
    public $color;
  // creating the methods to set and get the name and colour.
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}
// creating two new objects to be instances of the class and setting their name and colour values.
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');

$kiwi = new Fruit();
$kiwi->set_name('Kiwi');
$kiwi->set_color('Green');
// echo string output of the two objects (instances of the class) name and colour values.
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo "Name: " . $kiwi->get_name();
echo "<br>";
echo "Color: " . $kiwi->get_color();

// instantiated a new object.
$mango = new Fruit();
// check whether $mango is an instance of Fruit class.
var_dump($mango instanceof Fruit);




// creating a product class of Jeans.
class Jeans {
    // creating the properties of the Jeans class.
    public $brand;
    public $style;
    public $color;
    public $size;
    // creating a construct method which is automatically called when a new object is created.
    function __construct($brand, $style, $color, $size) {
        $this->brand = $brand;
        $this->style = $style;
        $this->color = $color;
        $this->size = $size;
    }
    // created four methods returning the current object.
    function get_brand() {
        return $this->brand;
    }
    function get_style() {
        return $this->style;
    }
    function get_color() {
        return $this->color;
    }
    function get_size() {
        return $this->size;
    }
}
// created a new object/instance of the class and passed it new values.
$gucci_skinny = new Jeans("Gucci", "Skinny Fit", "Dark Blue", "32, Reg");
// output the new objects product detail values.
echo $gucci_skinny->get_brand();
echo "<br>";
echo $gucci_skinny->get_style();
echo "<br>";
echo $gucci_skinny->get_color();
echo "<br>";
echo $gucci_skinny->get_size();




// create a class.
class Car {
    // create the properties of the class.
    public $make;
    public $model;
    public $color;
    // create a construct method which is automatically called when a new object is created.
    function __construct($make, $model, $color) {
        $this->name = $make;
        $this->name = $model;
        $this->color = $color;
    }
    // created a destruct function which is automatically called at the end of a script and destroys that object.
    function __destruct() {
        echo "The car you have chosen is a {$this->make} {$this->model} in the color {$this->color}.";
    }
}
// creating a new object and passing the new values.
$car_sold = new Car("Volvo", "XC90", "Silver");

