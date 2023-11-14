<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles1.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1><a href= "website/myindex.php">Elena's IT 261 Portal Page</a></h1>
    <h2>Welcome</h2>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="./website/mydaily.php ">Switch</a></li>
                <li><a href=" ">Troubleshoot</a></li>
                <li><a href=" ">Calculator</a></li>
                <li><a href=" ">Email</a></li>
                <li><a href=" ">Database</a></li>
                <li><a href=" ">Gallery</a></li>
            </ul>


        </nav>
        <main>
            <h2>About me</h2>
            <img class="right" src="images/elena1.png " alt="Elena">
            <p>I'm a student at Seattle Central College studying web design. I like to plunge into the unknown and learn new things for myself. That's why I'm here.</p>
            <p> I also like traveling, which is my hobby. My favorite thing to do is visit Europe, especially at Christmas. In this time Europe is most beautiful and elegant! You should check it out… And it does not matter whether you see it: in person or via YouTube. 
            </p>
            <!-- <img src="images/elena2.png " alt="Elena "> -->

            <h3>MAMP Screenshot</h3>
             <img class="screen"  src="images/mamp1.png" alt="MAMP">
             
             <h3>Error Screenshot</h3>
             <img class="error" src="images/error1.png" alt="Error">

        </main>

        <aside>
            <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/vars2.php ">vars2.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week2/currency.php ">currency.php</a></li>

            </ol>

            <h3>Week 3</h3>
            <ol>
            <li><a href="weeks/week3/if.phph ">if.php</a></li>
                <li><a href="weeks/week3/date.php ">date.php</a></li>
                <li><a href="weeks/week3/for-each.php ">for-each.php</a></li>
                <li><a href="weeks/week3/for-loop.php ">for-loop.php</a></li>
                <li><a href="weeks/week3/switch.php ">switch.php</a></li>
                <li><a href="weeks/week3/index.php ">index.php</a></li>

            </ol>

            <h3>Week 4</h3>
            <ol>
                <li><a href=" ">something.php</a></li>
                <li><a href=" ">something.php</a></li>
                <li><a href=" ">something.php</a></li>
                <li><a href=" ">something.php</a></li>

            </ol>

            <h3>Week 5</h3>
            <ol>
                <li><a href=" ">something.php</a></li>
                <li><a href=" ">something.php</a></li>
                <li><a href=" ">something.php</a></li>
                <li><a href=" ">something.php</a></li>

            </ol>


        </aside>

</div>
<!-- close wrapper -->

<footer>
        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a href="../myindex.php">Web Design by Elena</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
            
            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>

    </footer>

</body>
</html>