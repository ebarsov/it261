
<html>
<head>
<title>My Adder Assignment</title>
<style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:380px;
        margin:0 auto;
        border:1px solid red;
        padding:10px; 
    }
    
    h1 {
        text-align: center;
    }
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">

    <label>Enter the first number:</label>
    <input type="number" name="num1"><br>

    <label>Enter the second number:</label>
    <input type="number" name="num2"><br>

    <input type="submit" value="Add Em!!">
 
</form>

<?php     

if (isset($_POST['num1'],
$_POST['num2'] )){

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$myTotal = $num1 + $num2;

if(empty($_POST['num1'] &&
$_POST['num2']))  
{
    echo '<p class="error">Please fill out your numbers!</p>';
}
else 
{
    echo '
    <h2>You added '.$num1.' and '.$num2.'
    <p>and the answer is <br> '.$myTotal.'!</p></h2>';
}
{
  echo '
  <p><a href="">Reset page</a></p>
';
}
}
?>
</body>
</html>


<!--/* ERRORS (start given wrong assignment on third line)-->
<!-- 0. Start with HTML (DOCTYPE), then php part-->
<!-- 1. Line 5-6 - missing $_POST['num2']-->
<!-- 2. Line 8 - it does not need extra sign - before = -->
<!-- 3. Line 8 - $Num2 must be written with a small letter n: $num2 -->
<!-- 4. Line 9 - single quotes at the beginning and at the end are unnecessary.-->
<!-- 5. Line 9 - must be single quotes and periods are next to '.$num1.' without skipping space and single quotes '.$num2.' -->
<!-- 6. Line 9 - unnecessary double quotes and semi-colon -->
<!-- 7. Line 9 - missing closing tag </h2> -->
<!-- 10. Line 10 - unnecessary echo and single quote.-->
<!-- 11. Line 11 - <style="color:red;"> - replace  inside <p style="color:red;"> tag OR see #15 -->
<!-- 12. Line 11- single quotes '.$myTotal.' and missing first period.-->
<!-- 13. Line 11 - remove extra double quotes at the end (before closing </p> tag)-->
<!-- 14. Line 12 - add closing </p> tag and semi-colon ; at the end of the line -->
<!-- 15. Line 18 - add <style: color:red;>  from line 11 to paragraph (may be...) -->
<!-- 16. Line 22 - must be opening tag <form action=""> and add method=""> -->
<!-- 17. Line 23 - must be opening tag <label> at the beginning of the line -->
<!-- 18. Line 23 - must be <input type="number" and name="num1" with a small letter n -->
<!-- 19. Line 24 - must be opening <label> tag at the beginning and closing </label> tag after: colon -->
<!-- 20. Line 24 - must be <input type="number" -->
<!-- 21. Line 27 - replace closing php tag ?> from line 29 on line 27 -->
<!-- 22. Line 29 - remove unnecessary single quote, semi-colon, and curly brace -->
<!-- 23. Missing if(empty[]... else {})part of this code -->
<!-- 24. Add echo'' to Reset page --