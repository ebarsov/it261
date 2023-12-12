<?php
include('config.php');
include('./includes/header.php');
?>


    <body class="daily">

    <div id="wrapper">

            <h2 class="<?php echo $travelDay ;?> ">
            <?php echo $day; ?></h2>
            <img src ="./images/<?php echo $picture ; ?>" alt="<?php echo $altTag ; ?>" style="max-width: 75%; height: auto;">
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
        
    </div> <!-- end wrapper-->
    </body>
    </html>

    <?php
    include('./includes/footer.php');