<?php
// setting the cookie name.
$cookie_name = "user";
// setting the cookie value.
$cookie_value = "John Doe";
// setting the cookie to expire after 30 days and making it available in the entire website.
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
// if the cookie name is not set.
if(!isset($_COOKIE[$cookie_name])) {
    // output this echo string.
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    // otherwise output this echo string.
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    // and the cookie name value.
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>