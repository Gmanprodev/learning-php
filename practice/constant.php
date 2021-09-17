<?php
// defines a constant and gives a value, then echo's that value.
define("LUNCHTIME", "I'm really hungry!");
echo LUNCHTIME;

// defines a constant, sets a value and then declares the constant as case insensitive.
define("DINNER", "I'm still really hungry", true);
echo dinner;

// defines a constant and sets array values, then echo's the third value. 
define("languages", ["English", "German", "French", "Chinese"]);
echo languages[3];

// defines a constant and then sets a string value.
define("Payment", "Thanks for shopping with us and hope we'll see you again soon.");

// creates a function which echo's the constant and then calls the function.
function paymentTaken() {
    echo Payment;
}
paymentTaken();





