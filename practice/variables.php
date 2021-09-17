<?php

// creating 3 variables and setting their values.
$my_name = "Marc Gulliver";
$my_age = 38;
$my_height = "5ft 11";
// echo a string and injecting the variable values by concatenation.
echo "Name:" . $my_name . "<br>" . "Age:" . $my_age . "<br>" . "Height:" . $my_height . "<br>";

// creating a global variable.
$x = 5;
// the function below won't be able to access the variable as it's not in local scope.
function globalScope() {
    echo "This won't work trying to access $x";
}
globalScope();
// echo the variable because it's accessible outside of the function in a global scope.
echo "But this will work because we are outside a function $x";


// created a function that stores the variable and echo's it, then calls that function. This will work because it's all within local scope.
function localScope() {
    $x = 5;
    echo "This will work because we are inside a function $x";
}
localScope();
// echoing the variable here won't work because it's outside the function in global scope.
echo "But this won't work because we are outside a function $x";


// creating two variables and their values.
$x = 5;
$y = 10;
// creating a function which uses the global keyword which allows global access to a local scope.
function globalKeyword() {
    global $x, $y;
    $y = $x + $y;
}
globalKeyword();
// echo out the result.
echo $y;


// created a function with a variable value using the static keyword which means the value can be accessed more than once by the same function.
function staticTest() {
    static $my_car = "Range Rover";
    echo $my_car;
}
staticTest();
staticTest();
staticTest();
staticTest();


