<?php

// create the variable string.
$str = "Visit W3Schools";
// set the pattern search and declare case insensitive.
$pattern = "/w3schools/i";
// output the search results by passing two arguments of the text and the search criteria.
echo preg_match($pattern, $str);


// create the variable string.
$str = "The rain in SPAIN falls mainly on the plains.";
// set the pattern search and declare case insensitive.
$pattern = "/ain/i";
// output the search results by passing two arguments of the text and the search criteria.
echo preg_match_all($pattern, $str);


// create the variable string.
$str = "Visit Storm Digital!";
// set the pattern search and declare case insensitive.
$pattern = "/Storm/i";
// replace the word Storm with Neon by passing three arguments, the search pattern, the replacement text and text string.
echo preg_replace($pattern, "Neon", $str);

