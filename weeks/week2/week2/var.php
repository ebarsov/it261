<?php
// my variables

// don't forget that a variable is merely  acontainer for data


$name = "Elena"; //Elena is a string
$name = 'Hattie';
echo $name;

$body_temp = 98; //98 is an integer
$body_temp_new = 98.6; //98 is a float
echo '<br>';
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";
echo "My name is $name!";
echo "<br>";
echo 'My name is $name!'; // I like the single quotes

echo "<br>";
echo 'My name is '.$name.' !'; // I like the single quotes

echo "<br>";
echo 'The normal body temperature for a human being is '.$body_temp_new.' ';
echo "<br>";
$name = 'Sharon';
echo $name;
echo "<br>";
$x = 20;
$y = 5;

$z = $x + $y;  //I am using the term "assigned" vs equals
echo $z;
echo "<br>";
$z = $x * $y;
echo $z;
echo "<br>";
$z = $x / $y;
echo $z;

echo "<br>";
$first_name = 'Elena';
$last_name = 'Barsov';
echo $first_name." ". $last_name;
echo $first_name.' '. $last_name;

echo "<br>";
echo "Me full name is $first_name $last_name";
echo "<br>";
echo 'Me full name is '.$first_name.' '.$last_name.' ';
