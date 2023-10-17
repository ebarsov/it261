<?php
include('./includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Daily Homework</title>
    <style>

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        header {
            background-color: lightsteelblue;
        }

        body {
            background-color: whitesmoke;
        }

     #wrapper {
        width: 940px;
        margin: 20px auto;
        background-color:whitesmoke;
        }


        h1, h2, img {
            margin-bottom: 10px;
        }

        h1, h2, h3 {
           color: brown;
        }

        p {
            margin-bottom: 20px;
            text-align: justify;
        }

    </style>
</head>
<body>

    <div id="wrapper">

            <h2 class="<?php echo $travelDay ;?> ">
            <?php echo $day; ?></h2>
            <img src ="./images/<?php echo $picture ; ?>" alt="<?php echo $altTag ; ?>">
            <p><?php echo $inform; ?></p>
            <h3>Don't know what to choose to visit?
                Select by day of the week below!</h3>
            <ul>
    <li><a style="color:<?php 
        if($today =='Sunday') {
            echo 'brown';
        } else {
            echo 'blue';
        }; ?>"
        href="daily.php?
        today=Sunday">Sunday</a></li>

        <li><a style="color:<?php 
        if($today =='Monday') {
            echo 'green';
        } else {
            echo 'blue';
        }; ?>"
        href="daily.php?
        today=Monday">Monday</a></li>

        <li><a style="color:<?php 
        if($today =='Tuesday') {
            echo 'red';
        } else {
            echo 'blue';
        }; ?>"
        href="daily.php?
        today=Tuesday">Tuesday</a></li>

        <li><a style="color:<?php 
        if($today =='Wednesday') {
            echo 'yellow';
        } else {
            echo 'blue';
        }; ?>"
        href="daily.php?
        today=Wednesday">Wednesday</a></li>

        <li><a style="color:<?php 
        if($today =='Thursday') {
            echo 'black';
        } else {
            echo 'blue';
        }; ?>"
        href="daily.php?
        today=Thursday">Thursday</a></li>

        <li><a style="color:<?php 
        if($today =='Friday') {
            echo 'orange';
        } else {
            echo 'blue';
        }; ?>"
        href="daily.php?
        today=Friday">Friday</a></li>

        <li><a style="color:<?php 
        if($today =='Saturday') {
            echo 'purple';
        } else {
            echo 'blue';
        }; ?>"
        href="daily.php?
        today=Saturday">Saturday</a></li>

            </ul>
        <!--</main>-->

        <!-- <aside>
            <h3>This is our headline three in our beautiful aside</h3>
            <p>Nulla eros neque, consequat et leo sit amet, ultrices bibendum velit. Morbi maximus, velit et consectetur mattis, turpis quam blandit mauris, vitae vulputate turpis justo a augue. Nam tristique dictum sem vel cursus.</p>
        </aside> -->
    </div>
    <!-- end wrapper-->
    </body>
    </html>

    <?php
    include('./includes/footer.php');