<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// do not call out the header include yet!!!
// the following information is above the doctype
include('config.php');

// isn Get set???

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];


} else {
    header('Location:celebrities.php');
}

$sql = 'SELECT * FROM celebrities WHERE celebrities_id='.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $blurb = stripcslashes($row['blurb']);
        $description = stripcslashes($row['description']);
        // will I add a column?
        $feedback = '';

    } //close while loop


}  else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?>


<div class="wrapper">
<div id="celebrities-view">
<main>
<h1>Welcome to Celebrities View Page!</h1>
<h2>Introducing: <?php echo $first_name;?></h2>
<ul>
<?php 
echo '
<li><b>First Name:</b>'.$first_name.'</li>
<li><b>Last Name:</b>'.$last_name.'</li>
<li><b>Email:</b>'.$email.'</li>
<li><b>Birthdate:</b>'.$birthdate.'</li>
<li><b>Occupation:</b>'.$occupation.'</li>
';
?>
</ul>
<p><?php echo $description;?></p>
<p>Return to our <a href="celebrities.php"> celebrities page!</a></p>
</main>

<aside>
<h3><?php echo $first_name . ' ' . $last_name; ?></h3>
<figure>
<img src="./images/celebrities<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
<figcaption>
<?php echo $blurb;?>
</figcaption>

</figure>


</aside>
</div>
</div> <!-- end wrapper -->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');

?>
