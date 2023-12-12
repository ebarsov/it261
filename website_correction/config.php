<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

ob_start();

define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}




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

            case 'daily.php':
                $title = 'Daily page of our Website Project';
                $body = 'daily inner';
                break;

                case 'celebrities.php':
                    $title = 'Celebrities page of our Website Project';
                    $body = 'celebrities inner';
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
    'celebrities.php' => 'Celebrities',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key) {
    $my_return .='<li><a class="current" href="'.$key.'">
    '.$value.'</a></li>';
        } else {
    $my_return .='<li><a href="'.$key.'"> '.$value.'</a></li>';
        }
    
    } // end foreach
    return $my_return;
    
    } //end function 


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

// my form's PHP


$first_name = '';
$last_name = '';
$email = '';
$people ='';
$phone ='';
$time ='';
$gender ='';
$comments ='';
$privacy ='';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$people_err = '';
$phone_err ='';
$time_err ='';
$gender_err ='';
$comments_err ='';
$privacy_err ='';



if($_SERVER['REQUEST_METHOD'] == "POST") {

// if inputs are empty, we will declare a statement else we will assign the $_POSTS to a variable
// people = $_POST['people']

if(empty($_POST['people'])) {
// say something or do something
$people_err = 'Haven\'t decided to go yet?';
} else {
    $people = $_POST['people'];
}

if(empty($_POST['first_name'])) {
    // say something or do something
    $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        // say something or do something
        $last_name_err = 'Please fill in your last name';
        } else {
            $last_name = $_POST['last_name'];
        }

        if(empty($_POST['email'])) {
            // say something or do something
            $email_err = 'Please fill in your email';
            } else {
                $email = $_POST['email'];
            }

            if(empty($_POST['phone'])) {
                // say something or do something
                $phone_err = 'Please fill in your phone number';
                } else {
                    $phone = $_POST['phone'];
                }

                    if(empty($_POST['gender'])) {
                        // say something or do something
                        $gender_err = 'Please check your gender';
                        } else {
                            $gender = $_POST['gender'];
                        }

                        if(empty($_POST['comments'])) {
                            // say something or do something
                            $comments_err = 'We value your input';
                            } else {
                                $comments = $_POST['comments'];
                            }

                            if(empty($_POST['privacy'])) {
                                // say something or do something
                                $privacy_err = 'You must agree to receive spam email';
                                } else {
                                    $privacy = $_POST['privacy'];
                                }

                                if($_POST['time'] == NULL) {
                                    // say something or do something
                                    $time_err = 'Please choose your travel time';
                                    } else {
                                        $time = $_POST['time'];
                                    }
                                    
function my_people($people) {
    $my_return='';
    if(!empty($_POST['people'])) {
        $my_return = implode(',', $_POST['people']);
    }else {
        $people_err = 'Please enter the number of travelers!';
    }
    return $my_return; 
} // end my_people function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['gender'],
$_POST['people'],
$_POST['time'],
$_POST['comments'],
$_POST['privacy'] )) {

    $to = 'szemeo@mystudentswa.com';
    $subject = 'Test email on    '.date('m/d/y, h i A');
    $body = '
    First Name: '.$first_name.'  '.PHP_EOL.'
    Last Name: '.$last_name.'  '.PHP_EOL.'
    Email: '.$email.'  '.PHP_EOL.'
    Phone: '.$phone.'  '.PHP_EOL.'
    Gender: '.$gender.'  '.PHP_EOL.'
    People: '.my_people($people).'  '.PHP_EOL.'
    Time: '.$time.'  '.PHP_EOL.'
    Comments: '.$comments.'  '.PHP_EOL.'
    ';

$headers = array(
    'From' => 'noreply@gmail.com'
);

// we will be adding an if statement  - that this email form will work ONLY if all the fields are filled out!!!

if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $phone &&
    $gender &&
    $people &&
    $time &&
    $comments )) {

        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }

    // don't forget, I must UPLOAD my form onto the server to receive an email!!!

} // end isset

} // end server request method
