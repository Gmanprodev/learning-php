<?php

function printMessage() {
    echo "I'm learning PHP Functions";
}

printMessage();

function familyName($fname) {
    echo "$fname Gulliver.<br>";
}
familyName("Marc");
familyName("Nkem");
familyName("Sienna");
familyName("Noah");

function addNumbers(int $a, int $b, int $c) {
    return $a + $b + $c;
}
echo addNumbers(5, 10, 15);

function addition(int $x, int $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 =" . addition(5, 10) . "<br>";
echo "7 + 13 =" . addition(7, 13) . "<br>";
echo "2 + 4 =" . addition(2, 4) . "<br>";

function returnType(float $a, float $b) : float {
    return $a + $b;
}
echo returnType(1.7, 3.2);

function add_ten(&$value) {
    $value += 5;
}
$var_change = 2;
add_ten($var_change);
echo $var_change;


