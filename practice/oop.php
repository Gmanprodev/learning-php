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




// create a class with three different modifiers.
class Person {
    public $gender;
    protected $height;
    private $weight;
}
// create a new object of the person class.
$james = new Person();
// this property can be accessed as it's public.
$james->gender = 'Male';
// this property cannot be accessed because it is outside of the class.
$james->height = '6ft, 2';
// this property cannot be accessed because it is outside of the class.
$james->weight = '12 stone';



// create a class with three properties.
class School {
    public $name;
    public $location;
    public $ofsted;
    // create three methods with three different modifiers.
    function set_name($name) {
        $this->name = $name;
    }
    protected function set_location($location) {
        $this->location = $location;
    }
    private function set_ofsted($ofsted) {
        $this->ofsted = $ofsted;
    }
}
// create a new object of the school class.
$find_school = new School();
// this property can be accessed as it's default property modifier is public.
$find_school->set_name("St Peters Primary School");
// this property cannot be accessed because the method is using the protected modifier.
$find_school->set_location("Billericay");
// this property cannot be accessed because the method is using the private modifier.
$find_school->set_ofsted("Outstanding");



// create a class.
class Vegetable {
    // create class properties.
    public $name;
    public $color;
    // create a public construct method which is called every time a new object is created.
    public function __construct($name, $color) {
        // declares the current object.
        $this->name = $name;
        $this->color = $color;
    }
    // create a public method which passes the object values and outputs is a string.
    public function intro() {
        echo "The vegetable is {$this->name} and the color is {$this->color}.";
    }
}
// create a class which extends from the Vegetable class and uses it's properties and methods.
class Cauliflower extends Vegetable {
    // create a method which outputs a string.
    public function message() {
        echo "Am I a vegetable or a flower? ";
    }
}
// create a new object of the Cauliflower class which also extends the methods and properties of the Vegetable class.
$cauliflower = new Cauliflower("Cauliflower", "White");
// calls the method from the Cauliflower class and outputs the string.
$cauliflower->message();
// calls the method from the Vegetable parent class and outputs the strings.
$cauliflower->intro();





// create a class.
final class Ninja_Turtles {
    // create class properties.
    public $name;
    public $color;
    // create a public construct method which is called every time a new object is created.
    public function __construct($name, $color, $fav_food) {
        // declares the current object.
        $this->name = $name;
        $this->color = $color;
        $this->food = $fav_food;
    }
    // create a public method which passes the object values and outputs is a string.
    public function intro() {
        echo "I am {$this->name} and I wear a {$this->color} headband.";
    }
}
/* create a class which extends from the Ninja_Turtles class and uses it's properties and methods.
This won't work because we've used the 'final' keyword which stops it from being extended. */
class Leonardo extends Ninja_Turtles {
    // create a method which outputs a string.
    public function message() {
        echo "My favourite food is {$this->food}.";
    }
}
// create a new object of the Leonardo class which also extends the methods and properties of the Ninja_turtles class.
$turtle = new Leonardo("Leonardo", "Blue", "Pizza");
// calls the method from the Leonardo class and outputs the string.
$turtle->message();
// calls the method from the Ninja_turtles parent class and outputs the strings.
$turtle->intro();







