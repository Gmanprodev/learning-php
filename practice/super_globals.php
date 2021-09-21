<?php

// creating variables and values.
$x = 75;
$y = 25;


// created a function and using GLOBALS to access the above variables from within a function and set them as the sum of the new variable. 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
// calling the function.
addition();
// new variables output.
echo $z;


// using SERVER super global and it's elements to output data about headers, paths and scripts. 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


// created an if statement that uses the SERVER super global to set the request method to POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // create new variable that sets the REQUEST method for the fname in the form.
    $name = $_REQUEST['fname'];
    // if the fname field is empty show this output.
    if (empty($name)) {
        echo "Name is empty";
    // if the fname field is not empty output the value entered.
    } else {
        echo $name;
    }
}


