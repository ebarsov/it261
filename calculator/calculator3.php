<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form 3 php</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>"  method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>Total miles driving</label>
        <input type="number" name="total_miles" value="<?php if(isset($_POST['total_miles'])) echo htmlspecialchars($_POST['total_miles']) ;?>">

        <label>How fast do you typically drive?</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>">

        <label>Price of gas</label>
    <ul>
        <li><input type="radio" name="price" value="2.50" <?php if(isset($_POST['price']) && $_POST['price'] == 2.50) echo 'checked="checked"' ;?>>$2.50</li>
        <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked="checked"' ;?>>$3.00</li>
        <li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked"' ;?>>$3.50</li>
    </ul>

        <label>Fuel efficiency</label>
<select name="fuel">
<option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected = "unselected"'  ;?>>Select one!</option>
<option value="terrible" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'terrible') echo 'selected = "selected"'  ;?>>Terrible@10mpg</option>
<option value="average" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'average') echo 'selected = "selected"'  ;?>>Average@20mpg</option>
<option value="great" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'great') echo 'selected = "selected"'  ;?>>Great@40mpg</option>
</select>

        <input type="submit" value="Calculate">

        <p><a href=""> Reset</a></p>

    </fieldset>
    </form>

    <?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL|E_STRICT);


if($_SERVER['REQUEST_METHOD']=='POST') {

   if(empty($_POST['name'])) {
    echo '<p class="error">Please fill out your Name!</p>';
   }
    
   if(empty($_POST['total_miles'])) {
    echo '<p class="error">Please fill out your total driving miles!</p>';
   }

   if(empty($_POST['speed'])) {
    echo '<p class="error">Please fill out how fast will you be driving!</p>';
   }

   if(empty($_POST['hours'])) {
    echo '<p class="error">Please fill out how many hours per day would you like to drive!</p>';
   }

   if(empty($_POST['price'])) {
    echo '<p class="error">Your cost of gas, please!</p>';
   }

   /* if(empty($_POST['fuel'])) {
    echo '<p class="error">Please select your car\'s efficiency!</p>';
   }
 */
   if($_POST['fuel'] == NULL) {
    echo '<p class="error">Please select your car\'s efficiency!</p>';
   }

   if(!empty($_POST['name'] && $_POST['total_miles'] && $_POST['speed'] && $_POST['hours'] && $_POST['price'] && $_POST['fuel'] )) {

    echo '<p>Please view screenshot!</p>';
   }


 if (isset($_POST['name'], 
    $_POST['total_miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['price'],
    $_POST['fuel'] )) {
      $name = $_POST['name'];
      $total_miles = floatval($_POST['total_miles']);
      $speed = floatval($_POST['speed']);
      $hours = floatval($_POST['hours']);
      $price =  $_POST['price'];
      $fuel = boolval($_POST['fuel']);

      /* $speed = null;
      $hours = null;
      $fuel = null;

      if(<!$speed == null && $hours == null && $fuel == null) {
        
        $total_hours = $total_miles/$speed;
        $total_days = $total_hours/$hours;
        $gallons = $total_miles/$fuel;
      }  
  */

      $total_hours = $total_miles/$speed;
      $total_days = $total_hours/$hours;
      $gallons = $total_miles/$fuel; 
      $dollars = $gallons * $price;
      /* $friendly_gallons = floor($gallons);
      $friendly_dollars = floor($dollars); */

      if(!empty($name && $total_miles && $speed && $hours && $price && $fuel ) ) {

      echo '
      <div class="box">
    <h2>Hello  '.$name.',</h2>
    <p>You will be traveling a <b> '.number_format($total_hours, 2).' hours </b>  for  <b> '.number_format($total_days, 2).' days</b>,
     and you will be using <b> '.floor($gallons).' gallons</b>, costing you <b>$ '.number_format($dollars, 2).'  dollars</b> 
      to reach your destination.  </p>
    
      </div>
      ';
    }
    }

     } // end server request
    
     ?>
    
</body>
</html>




