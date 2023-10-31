<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form 1 php</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']  ;?>"  method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name">

        <label>Total miles driving</label>
        <input type="number" name="amount1">

        <label>How fast do you typically drive?</label>
        <input type="number" name="amount2">

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="amount3">

        <label>Price of gas</label>
    <ul>
        <li><input type="radio" name="price" value="2.50">$2.50</li>
        <li><input type="radio" name="price" value="3.00">$3.00</li>
        <li><input type="radio" name="price" value="3.50">$3.50</li>
    </ul>

        <label>Fuel efficiency</label>
<select name="fuel">
<option value="" NULL>Select one!</option>
<option value="terrible">Terrible@10mpg</option>
<option value="average">Average@20mpg</option>
<option value="great">Great@40mpg</option>
</select>

        <input type="submit" value="Calculate">

        <p><a href=""> Reset</a></p>

    </fieldset>
    </form>

    <?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


if($_SERVER['REQUEST_METHOD']=='POST') {

    if(empty($_POST['name'] &&
    $_POST['amount1'] &&
    $_POST['amount2'] &&
    $_POST['amount3'] /* &&
    $_POST['price'] &&
    $_POST['fuel'] */ )) {
    
    echo '<p class="error">Please fill out all the fields!</p>';
    
    } elseif (isset($_POST['name'], 
    $_POST['amount1'],
    $_POST['amount2'],
    $_POST['amount3'],
    /* $_POST['price'],
    $_POST['fuel'] */)) {
      $name = $_POST['name'];
      $amount1 = $_POST['amount1'];
      $amount2 = $_POST['amount2'];
      $amount3 = $_POST['amount3'];
      /* $price = $_POST['price'];
      $fuel = $_POST['fuel']; */
      $days = ($amount1/$amount2) / $amount3;
      
      echo '
      <div class="box">
    <h2>Hello  '.$name.',</h2>
    <p>You will be traveling for  <b> '.floor($days).' days</b>  to reach your destination.  </p>
    
      </div>
      ';
    }
    
     } // end server request
    
     ?>
    
</body>
</html>




