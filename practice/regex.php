<?php

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

$str = "Visit Storm Digital!";
$pattern = "/Storm/i";
echo preg_replace($pattern, "Neon", $str);

