<?php

// a string value
$string = "I'm a string";

// an integer value.
$integer = 4000;

// a float value which is defined by the use of a decimal.
$float = 26.656;

// a boolean which only has 2 values, true or false.
$boolean = true;

$Boolean = false;

// null represents no value being available.
$null = null;

// an array which can hold multiple values at the same time.
$my_family = array("Nkem", "Sienna", "Noah");

// this displays all of the values in the browser.
var_dump($my_family, $null, $boolean, $Boolean, $float, $integer, $string);


// create a class and it's properties.
class House {
    public $type;
    public $beds;
    // construct allows this function to be automatically called when a new object of the class is created.
    public function __construct($type, $beds) {
        $this->type = $type;
        $this->beds = $beds;
    }
    public function message() {
        return "My house is a " . $this->type . "with " . $this->beds . "!";
    }
}

// created new objects of the class and echo to the browser.
$myHouse = new House("detached", "four beds");
echo $myHouse -> message();
echo "<br>";
$myHouse = new House("flat", "2 beds");
echo $myHouse -> message();




