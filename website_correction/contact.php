<?php
include('config.php');
include('./includes/header.php');
?>

<!-- <!DOCTYPE html>
<html lang="en"> 
<head>
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Contact Page</title>
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

     /* #wrapper {
        width: 940px;
        margin: 20px auto;
        background-color:whitesmoke;
        }

        main{
            width:62%; */
            /* height:400px;*/
            /* background:lightblue;
            float:left;
        }

        aside {
            width:35%;
            /* height:300px; */
            /* background:lightsalmon;
            float:right;        
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
        } */ 
 
    </style> 
<!-- </head> -->
<!-- <body>  -->

    <div id="wrapper">

<!--<main>-->
        <h1>Welcome to our Contact Page!</h1>

<?php 
include('./includes/form.php') ; 
?>
            
<!--</main>-->

       <!--  <aside>
            <h3>This is our headline three in our beautiful aside</h3>
            <p>Nulla eros neque, consequat et leo sit amet, ultrices bibendum velit. Morbi maximus, velit et consectetur mattis, turpis quam blandit mauris, vitae vulputate turpis justo a augue. Nam tristique dictum sem vel cursus.</p>
        </aside> -->

    <!-- </div> end wrapper -->
    <!-- </body> -->
    <!-- </html> -->

    <?php
    include('./includes/footer.php');