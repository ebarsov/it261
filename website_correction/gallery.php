<?php
include('config.php');
include('./includes/header.php'); 

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

/* error_log('Debug: $image=' . print_r($image, true));
error_log('Debug: $name=' . print_r($name, true)); */

$picture = array(
    'Mount_Rainier' => 'raini_Explore the Mount Rainier!',
    'Saint_Helen' => 'helen_Do not forget about Mount Saint Helen!',
    'Mount_Baker' => 'baker_Visit the Mount Baker!',
    'Space_Needle' => 'needl_Climb the Space Needle!',
    'Chihuly_Garden' => 'chihu_Take photos in the Chihuly Garden!',
    'Boing_Museum' => 'boinn_Boing Museum will interest you!',
    'Seward_Park' => 'sewar_Enjoy a walk in the Seward Park!',
    'Starbucks_Store' => 'starb_First Sturbucks Store is still waiting for you!'
);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Gallery Page</title> -->
    <!-- <style>

/* body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        } */

        /* body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            border: 1px solid red;
            border-collapse: collapse;
        }

        td {
            border: 1px solid red;
            text-align: center;
            padding: 10px;
        }

        img {
    width: 150px; 
    height: 150px; 
    object-fit: cover; 
} */


/* body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        table {
            border: 1px solid red;
            border-collapse: collapse;
            margin: 20px; 
        }

        td {
            border: 1px solid red;
            text-align: center;
            padding: 10px;
        }

        img {
            width: 150px; 
            height: 150px; 
            object-fit: cover;
        } */

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            /* background-color: #f0f0f0; */
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px; /* Add margin for better spacing between header and table */
        }

        table {
            border: 1px solid red;
            border-collapse: collapse;
            margin: 20px; /* Add margin for better spacing */
        }

        td {
            border: 1px solid red;
            text-align: center;
            padding: 10px;
        }

        img {
            width: 150px; 
            height: 150px; 
            object-fit: cover;
        }

    </style>
</head> -->


<div id="gallery">
<main>
    <h1>Welcome to our Gallery Page!</h1>

    <table>
    <?php foreach($picture as $name => $description)   :?>
        <tr>
            <td>
                <?php
                $image = substr($description, 0, 5);
                echo '<img src="images/' . $image . '.jpg" alt="' . str_replace('_', ' ', $name) . '">';
                ?>
            </td>
            <td><?php echo str_replace('_', ' ', $name); ?></td>
            <td><?php echo substr($description, 6); ?></td>
        </tr>
    <?php endforeach ; ?>
    </table>    
    </main>
    </div>
</html>

<?php include('./includes/footer.php'); ?>