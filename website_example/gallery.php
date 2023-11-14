<?php
include('config.php');
include('./includes/header.php'); 
/* $people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.'; */
// variable key        value
// $name               $image

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


$picture['Mount_Rainier'] = 'raini_Explore the Mount Rainier';
$picture['Saint_Helen'] = 'helen_Don\t forget about Mount Saint Helen';
$picture['Mount_Baker'] = 'baker_Visited the Mount Baker';
$picture['Space_Needle'] = 'needl_Climb the Space Needle!';
$picture['Chihuly_Garden'] = 'chihu_Take photos in the Chihuly Garden!';
$picture['Boing_Museum'] = 'boing_Boing Museum will interest you!';
$picture['Seward_Park'] = 'sewar_Enjoy a walk in the Seward Park!';
$picture['Starbucks_Store'] = 'starb_First Sturbucks Store';
//      $name                  $image

?>

<!DOCTYPE html>
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

    <table>
<!-- <?php foreach($people as $name => $image)   :?> -->
<?php foreach($picture as $name => $image)   :?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
<td><?php echo str_replace('_', ' ', $name) ;?></td>
<td><?php echo substr($image, 6);?></td>
</tr>
<?php endforeach ; ?>
    </table>    
</body>
</html>

<?php
    include('./includes/footer.php');
    ?>
