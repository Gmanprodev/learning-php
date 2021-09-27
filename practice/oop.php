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



// create a class.
class Goodbye {
    // setting a  class constant which cannot be changed. 
    const LEAVING_MESSAGE = "Thank you for visiting Neon Digital, see you again soon!";
    // create a method which uses the constant value.
    public function bye() {
        echo self::LEAVING_MESSAGE;
    }
}
// create a new object of the class.
$goodbye = new Goodbye();
// use the new object to call the bye method which displays the text string.
$goodbye->bye();




// Create a Parent class and public method.
abstract class Transport {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    // create an abstract method.
    abstract public function intro() : string;
}

// Create three Child classes and use the parent class method.
class Audi extends Transport {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Transport {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Transport {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create new objects from the child classes and display the string value.
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();



// Create an Interface definition.
interface Animal {
    public function makeSound();
}

// Create three different Class definitions that use the public interface method.
class Cat implements Animal {
    public function makeSound() {
        echo " Meow ";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo " Bark ";
    }
}

class Mouse implements Animal {
    public function makeSound() {
        echo " Squeak ";
    }
}

// Create new objects
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// For each of the animals execute the public method to display the string value of each animal noise.
foreach($animals as $animal) {
    $animal->makeSound();
}




// create two traits that can be used by classes.
trait message1 {
    public function msg1() {
        echo "OOP is fun! ";
    }
}

trait message2 {
public function msg2() {
    echo "OOP reduces code duplication!";
}
}
//Create two classes that use the two traits.
class Welcome {
use message1;
}

class Welcome2 {
use message1, message2;
}
//Create new objects and execute the trait methods.
$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();





// Create an Iterator class.
class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;
    // Create a public construct method.
    public function __construct($items) {
        // Use array_values() to make sure that the keys are numbers.
        $this->items = array_values($items);
    }
    // returns the element that the pointer is currently pointing to.
    public function current() {
        return $this->items[$this->pointer];
    }
    // returns the key associated with the current element in the list.
    public function key() {
        return $this->pointer;
    }
    // moves the pointer to the next element in the list.
    public function next() {
        $this->pointer++;
    }
    // moves the pointer to the first element in the list.
    public function rewind() {
        $this->pointer = 0;
    }
    // if no elements are being pointed to return false, for anything else return true.
    public function valid() {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item;
    }
}

// Use the iterator as an iterable.
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);

