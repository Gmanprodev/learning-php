<?php

// creating variables and setting values/types.
$number = 0;
$wrong_number = 14;
$cars = array("Nissan", "Volvo", "Ford", "Mazda");
$pets = array("Snoop"=>"Dog", "Cathy"=>"Tortoise", "Patch"=>"Rabbit");

// while the number is less than or equal to 20 the output will be displayed with a number value which auto increases by one and stops at 20.
while($number <= 20) {
    echo "I can count: $number <br>";
    $number++;
}

// while the number is less than or equal to 500 the output will be displayed with a number value which auto increases by fifty and stops at 500.
while($number <= 500) {
    echo "I'm counting in fifties: $number <br>";
    $number+=50;
}

// output the echo value with a number which auto increases by one each time while the number value is less than or equal to 10.
do {
    echo "Count until we get to 10: $number <br>";
    $number++;
} while ($number <= 10);

// output the echo value and number value while the variable value is less than or equal to 10. This will never work as the variable value is greater than 10.
do {
    echo "Count until we get to 10: $wrong_number <br>";
    $wrong_number++;
} while ($wrong_number <= 10);

// for loop which sets the starting value to 0, then continues the loop until it reaches 10 and auto increments by one.
for ($x = 0; $x <= 10; $x++) {
    // output is displayed until it reaches 10.
    echo "This number is: $x <br>";
}

// defines each value in the $cars array as a $make and then displays each value as an output.
foreach ($cars as $make) {
    echo "$make <br>";
}

// defines the values in the $pets array as a key and value and then displays each key value pair as an output.
foreach ($pets as $name => $type) {
    echo "$name = $type <br>";
}






