<?php

// creating variables and values.
$high = 700;
$low = 6;
$t = true;
$f = false;
$txt1 = "Hello";
$txt2 = "World!";
$bright = array("orange", "yellow", "pink");
$dark = array("black", "blue", "grey");

// addition
echo $high + $low;

// subtraction
echo $high - $low;

// multiplication
echo $high * $low;

// division
echo $high / $low;

// modulus - output is the remainder after dividing one number by another.
echo $high % $low;

// the value of the left variable is equal to both variables added together.
echo $high += $low;

// the value of the left variable is equal to $high value subtract $low value.
echo $high -= $low;

// the value of the left variable is equal to $high value multiplied by $low value.
echo $high *= $low;

// the value of the left variable is equal to $high value divided by $low value.
echo $high /= $low;

// the value of the left variable is equal to the modulus of both variable values.
echo $high %= $low;

// returns true if the values equal.
echo $high == $low;

// returns true if the values identical.
echo $high === $low;

// returns true if the values are not equal.
echo $high != $low;

// returns true if the values are not equal.
echo $high <> $low;

// returns true if the values are not identical.
echo $high !== $low;

// returns true if $high is greater than $low.
echo $high > $low;

// returns true if $high is less than $low.
echo $high < $low;

// returns true if $high is greater than or equal to $low.
echo $high >= $low;

// returns true if $high is less than or equal to $low.
echo $high <= $low;

// returns an integer value less than, greater than or equal to zero depending on the variable values comparison.
echo $high <=> $low;

// increases by one then returns the value.
echo ++$high;

// returns the value and then increases by one.
echo $high++;

// reduces by one then returns the value.
echo --$high;

//returns the value then reduces by one.
echo $high--;

// true if both variables are true.
echo $t and $f;

// true if either variable is true
echo $t or $f;

// true if either variable is true but not both.
echo $t xor $f;

// true if both variables are true.
echo $t && $f;

// true if either variable is true.
echo $t || $f;

// true if the variable is not true.
echo !$t;

// concatenation of both variables.
echo $txt1 . $txt2;

// combines both arrays into one array.
echo $bright + $dark;

// returns true if both arrays have the same key value pairs.
echo $bright == $dark;

// returns true if both arrays have the same key value pairs in the same order and same types.
echo $bright === $dark;

// returns true if first value is not equal to second value.
echo $bright != $dark;

// returns true if first value is not equal to second value.
echo $bright <> $dark;

// returns true if first value is not identical to second value.
echo $bright !== $dark;





