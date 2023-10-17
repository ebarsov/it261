<?php
// class coffee exercise
// if today is Friday, it will be pumpkin latte day
// INTRODUCING the isset() function
// then we will introduce our first GLOBAL variable
// our switch



// starting the switch
// if $GET['today'] is set, $today, then all is well, but is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set?

//$variable = 'This is our variable';
/* if(isset($variable)) {
    echo 'Variable has been set';
} else
echo 'Variable has not been set!';

echo '<br>'; */

/* if(isset($_GET['today'])) {
    echo 'Today has been set';
} else {
    echo 'NOT!!!!!';
} */

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday':
        $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p>
        The moment Fall hits, we rush to our local coffee shop and order a <b>pumpkin spice latte</b>. We love them so much, we took it upon ourselves to try making it at home. This recipe is easy and I bet you have most, if not everything, you need to make it at home right now. It also comes together in under 10 minutes!
        </p>';
break;

case 'Saturday':
    $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
    $pic = 'greentea.jpg';
    $alt = 'Green Tea Latte';
    $content = '<p>
    <b>A green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.
    </p>';
    break;

    case 'Sunday':
        $coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Coffee';
        $content = '<p>
        In the New York City area, <b>“a regular coffee”</b> is a cup of coffee with cream and sugar. Elsewhere, “regular coffee” means either black coffee (no cream, no sugar), or coffee with the usual amount of caffeine, as opposed to decaf (decaffeinated) coffee.
        </p>';
        break;

        case 'Monday':
            $coffee = '<h2>Monday is our Latte Day!</h2>';
            $pic = 'latte.png';
            $alt = 'Latte';
            $content = '<p>
            <b>
            A latte or caffè latte</b> is a milk coffee that boasts a silky layer of foam as a real highlight to the drink. A true latte will be made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top.
            </p>';
            break;

            case 'Tuesday':
                $coffee = '<h2>Tuesday is our Americano Day!</h2>';
                $pic = 'americano.jpg';
                $alt = 'Americano Coffee';
                $content = '<p>
                <b>
                Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, resulting in a drink that retains the complex flavors of espresso, but in a lighter way. Its strength varies with the number of shots of espresso and the amount of water added.
                </p>';
                break;

                case 'Wednesday':
                    $coffee = '<h2>Wednesday is Frappuccino Day!</h2>';
                    $pic = 'frap.png';
                    $alt = 'Frappuccino';
                    $content = '<p>
                    <b>
                    A Frappuccino</b> is a line of blended iced coffee drinks sold by Starbucks. It may consist of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices. It may also include blended Starbucks refreshers.
                    </p>';
                    break;

                    case 'Thursday':
                        $coffee = '<h2>Thursday is our Cappuccino Day!</h2>';
                        $pic = 'cap.png';
                        $alt = 'Cappuccino';
                        $content = '<p>
                        <b>
                        A cappuccino</b> is an espresso drink with steamed milk, milk foam and espresso. It’s very similar to a latte (cafe latte), but the proportion of steamed milk is different.
                        </p>';
                        break;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
     #wrapper {
        width: 940px;
        margin: 20px auto;
        }

        h1, h2, img {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
 <div id = "wrapper">
 <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
 <?php
echo $coffee;
 ?>
 <img src ="./images/<?php echo $pic ; ?>" alt="<?php echo $alt ; ?>">
 <?php echo $content; ?>
 <h2>Check out our Daily Specials</h2>
 <ul>
<li><a href="switch.php?today=Sunday">Sunday</li>
<li><a href="switch.php?today=Monday">Monday</li>
<li><a href="switch.php?today=Tuesday">Tuesday</li>
<li><a href="switch.php?today=Wednesday">Wednesday</li>
<li><a href="switch.php?today=Thursday">Thursday</li>
<li><a href="switch.php?today=Friday">Friday</li>
<li><a href="switch.php?today=Saturday">Saturday</li>

 </ul>
</div>
<!-- end wrapper-->
</body>
</html>