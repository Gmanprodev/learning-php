<?php

// creating variables and values.
$morning = date("H");
$favfood = "Chicken Pad Thai";

// if the time is less than 20:00 the output is "Good Morning".
if ($morning < "20") {
    echo "Good Morning!";
}

// if the time is less than 20:00 the output is "Good Morning", otherwise the output is "Goodnight".
if ($morning < "20") {
    echo "Good Morning!";
} else {
    echo "Goodnight!";
}

// if the time is less than 9:00 the output is "Have a good morning".
if ($t < "9") {
    echo "Have a good morning!";
// if the time is greater than 9:00 and less than 16:00 the output is "Have a good day".
} elseif ($t < "16") {
    echo "Have a good day!";
// if none of the above are true the output is "Have a good night".
} else {
    echo "Have a good night!";
}

// use a pre defined variable to set the value.
switch ($favfood) {
    // set the case value to check against the variable value.
    case "Chicken Pad Thai":
        // if the case value matches the variable value display the output.
        echo "My favourite food is a Chicken Pad Thai!";
        // if this output is displayed, stop.
        break;
    // set the case value to check against the variable value.
    case "Cheeseburger":
        // if the case value matches the variable value display the output.
        echo "My favourite food is a Cheeseburger!";
        // if this output is displayed, stop.
        break;
    // set the case value to check against the variable value.
    case "Pie and Mash":
        // if the case value matches the variable value display the output.
        echo "My favourite food is Pie and Mash!";
        // if this output is displayed, stop.
        break;
    // if no case values match the variable value then display this output.
    default:
        echo "I don't like Chicken Pad Thai, Cheeseburger or Pie and Mash!";
}






