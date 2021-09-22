<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    // outputs a list of filter functions and their ID number into a table.
    foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>


<?php
// created a variable which holds a string value including html tags.
$str = "<h1>Hello World!</h1>";
// creating a new variable which uses a filter function to take the original string and remove the html tags.
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
// output the value of this variable.
echo $newstr;


// create variable with integer value.
$int = 100;
// if integer validation is true.
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    // output this echo string.
    echo("Integer is valid");
} else {
    // otherwise output this echo string.
    echo("Integer is not valid");
}


// create a variable with a string value (IP address).
$ip = "127.0.0.1";
// if the IP address validation is true.
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    // output this echo string.
    echo("$ip is a valid IP address");
} else {
    // otherwise output this echo string.
    echo("$ip is not a valid IP address");
}


// create a variable with a string value (email address).
$email = "john.doe@example.com";
// take the variable value and filter out all illegal characters from the email address.
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// if the email address validation is true.
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    // output this echo string.
    echo("$email is a valid email address");
} else {
    // otherwise output this echo string.
    echo("$email is not a valid email address");
}
?>

</body>
</html>