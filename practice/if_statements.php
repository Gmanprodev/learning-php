<?php

$morning = date("H");
$favfood = "Chicken Pad Thai";

if ($morning < "20") {
    echo "Good Morning!";
}

if ($morning < "20") {
    echo "Good Morning!";
} else {
    echo "Goodnight!";
}

if ($t < "9") {
    echo "Have a good morning!";
} elseif ($t < "16") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

switch ($favfood) {
    case "Chicken Pad Thai":
        echo "My favourite food is a Chicken Pad Thai!";
        break;
    case "Cheeseburger":
        echo "My favourite food is a Cheeseburger!";
        break;
    case "Pie and Mash":
        echo "My favourite food is Pie and Mash!";
        break;
    default:
        echo "I don't like Chicken Pad Thai, Cheeseburger or Pie and Mash!";
}





