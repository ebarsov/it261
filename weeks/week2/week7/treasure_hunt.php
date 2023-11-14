<?php 
$people['Donald_Trump'] = 'trump_Former President from NY';
$people['Joe_Biden'] = 'biden_President from PA';
$people['Hilary_Clinton'] = 'clint_Secretary from NY';
$people['Bernie_Sanders'] = 'sande_Senator from VT';

/* $people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.'; */
// we have people as a variable ($people), then we have a key (['']), then we have a value (='';)        
// $name                                                                             $image
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 7, class exercise - pictures</title>
    <style>

table {
    border: 1px solid red;
    border-collapse: collapse;
    /* border-collapse: separate;*/

}

/* td .column4,
td .column3 {
    border-spacing: 20px;
    padding-left: 20px; /* Adjust the border-spacing value to control the space between columns 
  
} */

/* .column2 {
  padding-right: 20px; /* Adjust the padding value to control the space between the 2nd and 3rd columns 
}

.column3 {
  padding-left: 20px; /* Adjust the padding value to control the space between the 2nd and 3rd columns 
} */

td {
    /* border: 1px solid red;*/
     padding-left:10px;
}

    </style>
</head>
<body>
    <table>
        
<?php foreach($people as $name => $image)   :?>
<tr>
<td name="column1"><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
<td name="column2"><?php echo str_replace('_', ' ', $name) ;?></td>
<!--<td colspan="2">Extra space</td>--> <!-- This cell spans two columns for extra space! -->
<td name="column3"><?php echo substr($image, 6);?></td>
<td name="column4"><img src="images/<?php echo substr($image, 0, 5);?>.png" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
</tr>
<?php endforeach ; ?>
    </table>    
</body>
</html>