<?php
// create a function which holds two variables.
function divide($dividend, $divisor) {
    // if this variable has a value of 0.
    if($divisor == 0) {
    // output this exception message.
    throw new Exception("Division by zero");
    }
    // then give the output of one value divided by another.
    return $dividend / $divisor;
}
// try passing these values into the function.
try {
    echo divide(5, 0);
} catch(Exception $e) {
    // when the $divisor value is 0 output this string.
    echo "Unable to divide.";
} finally {
    // always display this string output.
    echo "Process complete.";
}



