<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Full Name: <input type="text" name="fname" minlength="10" maxlength="40" validate="required">
    <input type="submit">
    <br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fname = htmlspecialchars($_REQUEST['fname']);
    if (empty($fname)) {
        echo "Name is empty";
    } else {
        echo $fname;
    }
}
?>

<br>

<?php
echo "<br>";
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
echo "<br>";
?>

<br>

<?php
$car_tax = 475;
$mot = 35;
$insurance = 230;

function car_costs() {
    $GLOBALS['total'] = $GLOBALS['car_tax'] + $GLOBALS['mot'] + $GLOBALS['insurance'];
}

car_costs();
echo $total;
?>

</body>
</html>