<?php
// this file will demonstrate for loops and in addition to placing your php inside your HTML!!!
// The for loop - Loops through a block of code a specified number of times.
// for(init counter; test counter; increment counter) { code to be executed for each iteration; }

// celcius and fahrenheit

// far = ($celcies * 9/5) + 32;

//1 kilometer is equal to 0.621371 miles (often shortened to .62).
// 1 ml = 1 km * 0.62


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcies Table</title>
    <style>
* {
    padding:0;
    margin:0;
    box-sizing: border-box;
}

table {
    width:500px;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid lightblue;
    }

td, th {
    border: 1px solid lightblue;
    border-collapse: collapse;
    padding: 5px;
}

h1, h2 {
    text-align: center;
    margin: 10px 0;
    color: green;
}

    </style>
</head>
<body>
  <h1>My First Celcius / Fahrenheit Table!</h1>  
  <table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 5) {
    $far = ($cel * 9/5) + 32;
echo '<tr>';
echo '<td>'.$cel.' degrees </td>';
echo '<td> '.$far.' degrees </td>';
echo '</tr>';
}
?>
  </table>

  <h1>My Second Celcius / Fahrenheit Table!</h1>  
  <table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 3) {
    $far = ($cel * 9/5) + 32;
echo '<tr>';
echo '<td>'.$cel.' degrees </td>';
echo '<td> '.number_format($far, 0).' degrees </td>';
echo '</tr>';
}
?>
  </table>


  <h1>My First Kilometer/Milege Table! </h1>
  <table>
<tr>
<th>Kilometer</th>
<th>Mile</th>
</tr>
<?php
for($km = 0; $km <= 100; $km += 5) {
    $ml = $km * 0.62;
echo '<tr>';
echo '<td>'.$km.' kilometers </td>';
echo '<td> '.$ml.' miles </td>';
echo '</tr>';
}
?>
  </table>

  <h1>My Second Kilometer/Milege Table! </h1>
  <table>
<tr>
<th>Kilometer</th>
<th>Mile</th>
</tr>
<?php
for($km = 0; $km <= 100; $km += 5) {
    $ml = $km * 0.62;
echo '<tr>';
echo '<td>'.$km.' kilometers </td>';
echo '<td> '.number_format($ml, 0).' miles </td>';
echo '</tr>';
}
?>
  </table>

</body>
</html>