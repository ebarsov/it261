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
    header('Location:gallerytest.php');
}

$sql = 'SELECT * FROM gallery WHERE gallery_id='.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        $image = stripcslashes($row['image']);
        $name = stripcslashes($row['name']);
        $descriptions = stripcslashes($row['descriptions']);
        
        // will I add a column?
        $feedback = '';

    } //close while loop


}  else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?>

<main>
<h1>Welcome to Gallery View Page!</h1>
<h2>Introducing: <?php echo $name;?></h2>
<ul>
<?php 
echo '
<li><b> Name:</b>'.$name.'</li>
';
?>
</ul>
<p><?php echo $descriptions;?></p>
<p>Return to our <a href="gallerytest.php"> gallery page!</p>
</main>

<aside>
<h3>You too can be in this photo!</h3>
<figure>
<img src="./images/gallery<?php echo $id;?>.jpg" alt="<?php echo $name;?>">
<!-- <figcaption>
<?php echo $blurb;?>
</figcaption>
 -->
</figure>


</aside>

</div> <!-- end wrapper -->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');
