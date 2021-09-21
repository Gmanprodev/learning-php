<?php

// created an array and the output is the number of values in the array.
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);


// created an array and then the output is an echo string to inject the arrays values by manually calling the array and the values position.
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


// created an array with three values.
$cars = array("Volvo", "BMW", "Toyota");
// created a variable which counts how many values are in the array.
$arrlength = count($cars);
/* created a for loop which sets a variable as the starting value of 0, 
if the variable value is less than the array length auto increment by one */
for($x = 0; $x < $arrlength; $x++) {
    // outputs each array value until $x is greater than the array length.
    echo $cars[$x];
    echo "<br>";
}


// created an array which holds key and value pairs.
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// output is an echo string which calls the array variable and the key value.
echo "Peter is " . $age['Peter'] . " years old.";

// created a loop which passes the key and value from the array.
foreach($age as $x => $x_value) {
    // output is a echo string with the key and value from the array.
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


// creating a multidimensional array storing make, stock and sold data.
$car_stock = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
/* each output echo string takes the different positions of each array within the 
array and then takes the position of the relevant values within the arrays.*/
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// sorts arrays in ascending order.
sort($cars);

// sorts arrays in descending order.
rsort($cars);

// sorts associative arrays in ascending order according to the value.
asort($age);

// sorts associative arrays in ascending order according to the key.
ksort($age);

// sorts associative arrays in descending order according to the value.
arsort($age);

// sorts associative arrays in descending order according to the key.
krsort($age);


