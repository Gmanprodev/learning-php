<?php

$number = 0;
$wrong_number = 14;
$cars = array("Nissan", "Volvo", "Ford", "Mazda");
$pets = array("Snoop"=>"Dog", "Cathy"=>"Tortoise", "Patch"=>"Rabbit");

while($number <= 20) {
    echo "I can count: $number <br>";
    $number++;
}

while($number <= 500) {
    echo "I'm counting in fifties: $number <br>";
    $number+=10;
}

do {
    echo "Count until we get to 10: $number <br>";
    $number++;
} while ($number <= 10);

do {
    echo "Count until we get to 10: $wrong_number <br>";
    $wrong_number++;
} while ($wrong_number <= 10);

for ($x = 0; $x <= 10; $x++) {
    echo "This number is: $x <br>";
}

foreach ($cars as $make) {
    echo "$make <br>";
}

foreach ($pets as $name => $type) {
    echo "$name = $type <br>";
}






