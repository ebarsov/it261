<?php
include('config.php');
include('./includes/header.php');

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

 
?>


<main>
<h1>Welcome to our Gallery Page!</h1>

<?php

// SQL query to select all rows from my table
$sql = 'SELECT * FROM gallery'; 

// Connect to my database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

// Execute the query
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn))); 


if(mysqli_num_rows($result) > 0) {

    // we are going to add a while loop
    
    while($row = mysqli_fetch_assoc($result)) {
    
        echo '
        <h2>Information about:  '.$row['name'].'</h2>
        <ul> 
        <li> '.$row['image'].' !</li>
        </ul>
        <p>For more information about '.$row['name'].', click <a href="gallery-view.php?id= '.$row['gallery_id'].' ">here</a></p>
        ';
    
    } // end while loop
    
    
    
    
    } else {
        echo 'Nobody home!!!';
    }
    
    // we are going to release the server
    
    @mysqli_free_result($result);
    
    @mysqli_close($iConn);
    
    ?>
    
    </main>

    <aside>


</aside>

</div> <!-- end wrapper-->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Page</title>
    <style>
        table {
            border: 1px solid red;
            border-collapse: collapse;
        }

        td {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <h1>Welcome to our Gallery Page!</h1>
   
<img src="./images/raini.jpg" alt="raini">

</body>
</html> -->

<?php
// Close the database connection
// mysqli_close($iConn);
include('./includes/footer.php');


 















