<?php

// create a function that when called outputs the echo string.
function printMessage() {
    echo "I'm learning PHP Functions";
}
printMessage();


// create a function that stores a variable and outputs the variable value and echo string. 
function familyName($fname) {
    echo "$fname Gulliver.<br>";
}
// calling the function and passing different variable values.
familyName("Marc");
familyName("Nkem");
familyName("Sienna");
familyName("Noah");


// creating a function which stores three variables and data types, then adds the three variables together.
function addNumbers(int $a, int $b, int $c) {
    return $a + $b + $c;
}
// calling the function and passing the three variables three values.
echo addNumbers(5, 10, 15);

// create a function that stores two variables and data types, 
function addition(int $x, int $y) {
    // create a new variable that is equal to adding the above variables together and returning the output.
    $z = $x + $y;
    return $z;
}
// outputting different echo strings and then using concatenation to call the function and pass the correct values.
echo "5 + 10 =" . addition(5, 10) . "<br>";
echo "7 + 13 =" . addition(7, 13) . "<br>";
echo "2 + 4 =" . addition(2, 4) . "<br>";


// create a function stores two float type variables and declare the return type as float, then return the value of the variables added together.
function returnType(float $a, float $b) : float {
    return $a + $b;
}
// calling the function and passing it the variable float values.
echo returnType(1.7, 3.2);


// created a function and turned the argument into a reference which sets the variable to also add 10 and allows a new variable to be passed outside the function.
function add_ten(&$value) {
    $value += 10;
}
// create a new variable and value.
$var_change = 2;
// call the function and pass the new variable which will be added to the existing value.
add_ten($var_change);
// output will be 12.
echo $var_change;


