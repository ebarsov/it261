<?php 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;

        case 'about.php':
            $title = 'About page of our Website Project';
            $body = 'about inner';
            break;

            case 'Daily.php':
                $title = 'Daily page of our Website Project';
                $body = 'daily inner';
                break;

                case 'project.php':
                    $title = 'Project page of our Website Project';
                    $body = 'project inner';
                    break;

                    case 'contact.php':
                        $title = 'Contact page of our Website Project';
                        $body = 'contact inner';
                        break;

                        case 'gallery.php':
                            $title = 'Gallery page of our Website Project';
                            $body = 'gallery inner';
                            break;
}
// our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

// starts of the switch for homework 3
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {

    case 'Sunday':
        $travelDay = 'brown';
        $day ='Sunday is a Day in the Seward Park';
        $inform = 'Seward Park is a municipal park in Seattle, Washington, United States. Located in the city neighborhood of the same name, it covers 300 acres (120 ha; 0.47 sq mi). 
        The park occupies all of Bailey Peninsula, a forested peninsula that juts into Lake Washington. It contains one of the last surviving tracts of old-growth forest within the city of Seattle.
         The park is named after U.S. Secretary of State William Seward. Want to feel atmosphere of Seattle and its people? Let\'s go to Seattle\'s favorite park on Sunday!';
        $picture = 'park.png';
        $altTag = 'Park';
        break;

        case 'Monday':
            $travelDay = 'green';
            $day ='Monday is a Mt.Rainier Day';
            $inform = 'Ascending to 14,410 feet above sea level, Mount Rainier stands as an icon in the Washington landscape. 
            An active volcano, Mount Rainier is the most glaciated peak in the contiguous U.S.A., spawning five major rivers. 
            Subalpine wildflower meadows ring the icy volcano while ancient forest cloaks Mount Rainier’s lower slopes. 
            Wildlife abounds in the park\’s ecosystems. A lifetime of discovery awaits. Monday is a better day for visiting Mount Rainier because of less tourists. ';
            $picture = 'rainier1.png';
            $altTag = 'Mt.Rainier';
            break;

            case 'Tuesday':
                $travelDay = 'red';
                $day ='Tuesday is a Mount St.Helens Day';
                $inform = 'Mount St. Helens or Louwala-Clough is an active stratovolcano located in Southwest, Washington, in the Pacific Northwest region of the United States. 
                            It is 96 miles south of Seattle, Washington, and 50 miles northeast of Portland, Oregon and features Stunning Landscapes and Endless Adventure.Tuesday is definitely a day to visit Mount St.Helens! ';
                $picture = 'helens.png';
                $altTag = 'Mt. St.Helens';
                break;

                case 'Wednesday':
                    $travelDay = 'yellow';
                    $day ='Wednesday is a Mt.Baker Day';
                    $inform = 'Mount Baker, also known as Koma Kulshan or simply Kulshan, is a 10,781 ft (3,286 m) 
                                active glacier-covered andesitic stratovolcano in the Cascade Volcanic Arc and the North Cascades of Washington in the United States. 
                                Mount Baker has the second-most thermally active crater in the Cascade Range after Mount St. Helens. Wednesday is for Mount Baker! ';
                    $picture = 'baker.png';
                    $altTag = 'Mt.Baker';
                    break;

                    case 'Thursday':
                        $travelDay = 'black';
                        $day ='Thursday is a Space Needle and Chihuly Garden Day';
                        $inform = 'This must-see museum exhibits creative and colorful blown glass sculptures of renowned artist Dale Chihuly. 
                        Eight indoor galleries and lush landscaped gardens feature a mix of new and past significant works. 
                        They are awe-inspiring whether you visit during the day, or in the evening when the sculptures are lit up. 
                        The highlight here is a 100-foot-long glass sculpture suspended in a glass conservatory—one of his largest ever. 
                        The Space Needle is an observation tower located in Seattle.Let\'s go there on Thursday! ';
                        $picture = 'chihuly.png';
                        $altTag = 'Chihuly Garden';
                        break;

                        case 'Friday':
                            $travelDay = 'orange';
                            $day ='Friday! Let is go to Boing Museum!';
                            $inform = 'Walk the aisle of JFK\'s Air Force One and climb aboard the Concorde at Seattle’s Museum of Flight. 
                            Built around Boeing’s original factory, it is the world’s largest air and space museum. 
                            Here, you can learn everything about the history of aviation, from the Wright Brothers and the exploration of Mars, to revolutionary aircrafts and spy planes.
                             You’ll get to barrel-roll a Mustang, land on the moon, soar over Puget Sound in a simulator, and even sit at the controls of the fastest jet on Earth. So, let\'s go to Boing Museum on Friday! ';
                            $picture = 'museum.png';
                            $altTag = 'Boing Museum';
                            break;

                            case 'Saturday':
                                $travelDay = 'purple';
                                $day ='Saturday is a Day of Starbuck\'s history';
                                $inform = 'Starbucks story begins in 1971 along the cobblestone streets of Seattle’s historic Pike Place Market. It was here where Starbucks opened its first store, offering fresh-roasted coffee beans, tea and spices from around the world for our customers to take home. Our name was inspired by the classic tale, “Moby-Dick,” evoking the seafaring tradition of the early coffee traders. Let\s slowly taste the Starbucks coffee, especially since Saturday is just for this! ';
                                $picture = 'starbucks.png';
                                $altTag = 'Starbucks';
                                break;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body clss="<?php echo $body ;?>">

    <header>
        <div class="inner-header">
            <a href="index.php">
            <img id="logo" src="images/logo.png" alt="logo">
            </a>
            <!-- <nav>
<ul>
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Daily</a></li>
    <li><a href="">Project</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">Gallery</a></li>

</ul>
            </nav> -->

<nav>
<ul>
<?php
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li><a style ="color:red;" href=" '.$key.' "> '.$value.'</a></li>';
    }else {
        echo '<li><a style="color:green;" href=" '.$key.' "> '.$value.'</a></li>';
    }
    
    } // end foreach

?>
</ul>
</nav>
        </div>
        <!-- end inner-header -->
    </header>