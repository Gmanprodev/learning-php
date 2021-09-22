<?php
// start a session.
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// set the session variables.
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
// output this echo string.
echo "Session variables are set.";
?>

<?php
// output is strings displaying the session variable values.
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

<?php
// remove all of the session variables.
session_unset();
// destroy the session.
session_destroy();
?>

</body>
</html>