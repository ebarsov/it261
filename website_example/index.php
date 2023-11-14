<?php
include('config.php');
include('./includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
<style>
* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        header {
            background-color: ghostwhite;
        }

        #hero {
            background-color: white;
        }

        body {
            background-color:white;
        }

        main {
            background-color: whitesmoke;
        }

        aside {
            background-color:white;
        }

        h1, h2, h3 {
            color:burlywood;
            margin-left: 10px;
        }

        p {
            /* margin-bottom: 20px;*/
            text-align: justify;
            padding: 15px;
        }

</style>
</head>
<body>

    <div id="wrapper">

        <div id="hero">
            <img src="images/washingtonst.png" alt="Welcome">
        </div>
        <!-- end hero-->

        <main>
            <h1>Welcome to Washington State!</h1>
            <!--<h2>This is a guide for a 7 day trip at Washington State!</h2> -->
            <p>Washington is the 18th-largest state, with an area of 71,362 square miles (184,830 km2), and the 13th-most populous state, with more than 7.7 million people. 
                The majority of Washington's residents live in the Seattle metropolitan area, the center of transportation, business, and industry on Puget Sound, an inlet of the Pacific Ocean consisting of numerous islands, deep fjords and bays carved out by glaciers.
                 The remainder of the state consists of deep temperate rainforests in the west; mountain ranges in the west, center, northeast, and far southeast; and a semi-arid basin region in the east, center, and south, given over to intensive agriculture. 
                 Washington is the second most populous state on the West Coast and in the Western United States, after California.</p>
            <h2>The Mt.Rainier is a Landmark of Washington State</h2>
            <p> There's nothing like being this close to a volcano. It's one of the many reasons why it's worth it to visit Mt Rainier (see picture up). 
                Generally, about 2 million people visit Mount Rainier each year. In 2022, the park had 2,371,585 visitors.
                There is a reason that Washington State license plates feature Mount Rainier. This landmark represents one of the many things that are so wonderful about its home state—
                with the misty mornings, the fern-filled forests, and the lovely mountain, gracing us with its presence when it pleases, Washington is a place where magic feels real.
             </p>
        </main>

        <aside>
            <h3>The Space Needle is a Landmark of Seattle</h3>
            <img src='./images/needle.png' alt="Needle">
            <p>The Space Needle is an observation tower in Seattle, Washington, United States.
                 Considered to be an icon of the city, it has been designated a Seattle landmark. 
                 Located in the Lower Queen Anne neighborhood, it was built in the Seattle Center for the 1962 World's Fair, which drew over 2.3 million visitors.</p>
        </aside>
    </div>
    <!-- end wrapper-->
</body>
    </html>

    <?php
    include('./includes/footer.php');