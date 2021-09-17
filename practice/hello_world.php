<!DOCTYPE html>
<html>
<body>

    <h1>My First PHP page</h1>

    <?php

    // echo is not case sensitive.
    echo "Hello World!<br>";
    ECHO "Hello World!<br>";
    EcHo "Hello World!<br>";

    // variable are case sensitive.
    $color = "blue";
    echo "Hello" . $color . "World!" . "<br>";
    echo "Hello" . $COLOR . "World!" . "<br>";
    echo "Hello" . $coLOR . "World!" . "<br>";
    ?>

</body>
</html>