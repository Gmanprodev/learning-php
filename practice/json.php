<?php
// creating an array with key value pairs.
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
// this displays the array values in a json format.
echo json_encode($age);


// create a variable which holds key value pairs in a json format.
$json = '{"Peter":35,"Ben":37,"Joe":43}';
// this displays the data in a php object format.
var_dump(json_decode($json));


// create a variable which holds key value pairs in a json format.
$json = '{"Peter":35,"Ben":37,"Joe":43}';
// create a variable which uses a function to take the json data and convert it into an associative php array.
$arr = json_decode($json, true);
// then output the key value pairs in a php format.
foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
