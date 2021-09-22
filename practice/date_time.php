<?php

// each echo string has a different date format output.
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";

// this string output is the day of the week.
echo "Today is " . date("l");

// this string output gives the hour(12 hour format), the minutes, the seconds and am/pm.
echo "The time is " . date("h:i:sa");


// sets the timezone.
date_default_timezone_set("Australia/Sydney");
// this string output gives the hour(12 hour format), the minutes, the seconds and am/pm.
echo "The time is " . date("h:i:sa");


// using the mktime function to specify the hour, minutes, seconds, month, day and year.
$d = mktime(11, 14, 54, 8, 12, 2014);
// this string output uses the mktime parameters to display the date and time.
echo "Created date is " . date("Y-m-d h:i:sa", $d);


// creating a date text string and using the strtotime function to convert the string into a time stamp.
$d = strtotime("10:30pm April 15 2014");
// this string output uses the strtotime string to display the date and time as a time stamp.
echo "Created date is " . date("Y-m-d h:i:sa", $d);


/*the below is taking different text strings and using the strtotime 
function to convert the string into a time stamp.*/
$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";


// create a variable which holds a strtotime string value (a specific day).
$startdate = strtotime("Saturday");
// create a variable which holds a strtotime string value (how may weeks) and the startdate variable. 
$enddate = strtotime("+6 weeks", $startdate);
// while the specific day is occurring for 6 weeks.
while ($startdate < $enddate) {
    // output the month and date of each specified day.
    echo date("M d", $startdate) . "<br>";
    // do this for every week.
    $startdate = strtotime("+1 week", $startdate);
}


