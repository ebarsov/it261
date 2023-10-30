<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form php(basic)</title>
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

        <label>How many hours per day do you plan driving?</label>
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
<option value="regular">Regular</option>
<option value="plus">Plus</option>
<option value="premium">Premium</option>
</select>

        <input type="submit" value="Calculate">

        <p><a href=""> Reset</a></p>

    </fieldset>
    </form>

   
    
</body>
</html>




