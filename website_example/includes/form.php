<!-- <form action="" method="post">


</form> -->

<?php 

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


ob_start();

$first_name = '';
$last_name = '';
$email = '';
$people = '';
$phone ='';
$time = '';
$gender ='';
$comments ='';
$privacy ='';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
/* $wines_err = '';*/
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

            /* if(empty($_POST['phone'])) {
                // say something or do something
                $phone_err = 'Please fill in your phone number';
                } else {
                    $phone = $_POST['phone'];
                } */

                if(empty($_POST['phone'])) { // if empty, type in your number
                    $phone_err = 'Your phone number please!';
                    } elseif(array_key_exists('phone', $_POST)){

                    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
                    $phone_err = 'Invalid format!';
                    } else{
                    $phone = $_POST['phone'];
                    } // end else
                    } // end main if

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


/* function my_people($people) {
    $my_return='';
    if(!empty($_POST['people'])) {
        $my_return = implode(',', $_POST['people']);
    } else {
        $people_err = 'Please enter the number of travelers!';
    }
    return $my_return;
} // end my_people function */

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['gender'],
$_POST['people'],
$_POST['time'],
$_POST['comments'],
$_POST['privacy'] )) {

    $to = 'oszemeo@mystudentswa.com';
    $subject = 'Test email on '.date('m/d/y, h i A');
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
    $comments ) &&
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }

    // don't forget, I must UPLOAD my form onto the server to receive an email!!!

} // end isset



} // closing server request method


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form (3) for my website</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>
     * {
    padding:0;
    margin:0;
    box-sizing: border-box;
}

body {
    background-color:linen;
}

form {
    width: 500px;
    margin: 30px auto;
}

fieldset {
    padding: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type=text],
input[type=email],
input[type=tel] {
    width: 100%;
    margin-bottom: 10px;
}

span {
    display: block;
    color: red;
    font-style: italic;
    margin-bottom: 10px;
}

select {
    margin-bottom: 10px;
}

textarea {
    width: 100%;
    resize: none;
    height: 80px;
    margin-bottom: 10px;
}

form ul {
    list-style-type: none;
    margin-bottom: 10px;
    margin-left: 5px;
}



h1 {
    text-align: center;
    margin-top: 20px;
    color: brown;
}

h2 {
    text-align: center;
    margin-top: 20px;
    color: chocolate;
}

    </style>
</head>
<body>
    <h2>Please fill out this form!</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
    <legend>
        Contact Elena
    </legend>
    <label>First Name</label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">
    <span><?php echo $first_name_err  ;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">
<span><?php echo $last_name_err  ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">
<span><?php echo $email_err  ;?></span>

<label>Gender</label>

<ul>
    <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo'checked="checked"' ;?>>Female</li>

    <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo'checked="checked"' ;?>>Male</li>

    <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo'checked="checked"' ;?>>Neither</li>
</ul>
<span><?php echo $gender_err  ;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])  ;?>">
<span><?php echo $phone_err  ;?></span>

<label>Group of people</label>
<ul>
    <li><input type="checkbox" name="people[]" value="one" <?php if(isset($_POST['people']) && in_array('one', $people)) echo 'checked="checked"'  ;?>>One</li>

    <li><input type="checkbox" name="people[]" value="two" <?php if(isset($_POST['people']) && in_array('two', $people)) echo 'checked="checked"'  ;?>>Two</li>

    <li><input type="checkbox" name="people[]" value="three" <?php if(isset($_POST['people']) && in_array('three', $people)) echo 'checked="checked"'  ;?>>Three</li>

    <li><input type="checkbox" name="people[]" value="four" <?php if(isset($_POST['people']) && in_array('four', $people)) echo 'checked="checked"'  ;?>>Four</li>

    <li><input type="checkbox" name="people[]" value="five" <?php if(isset($_POST['people']) && in_array('five', $people)) echo 'checked="checked"'  ;?>>Five or more</li>
</ul>

<span><?php echo $people_err  ;?></span>

<label>Time</label>

<select name="time">
    <option value="" <?php if(isset($_POST['time']) && is_null($_POST['time'])) echo 'selected="unselected"' ;?>>Select One! </option>

    <option value="ni" <?php if(isset($_POST['time']) && $_POST['time'] =="ni") echo 'selected="selected"' ;?>>9 am </option>

    <option value="te" <?php if(isset($_POST['time']) && $_POST['time'] =="te") echo 'selected="selected"' ;?>>10 am </option>

    <option value="el" <?php if(isset($_POST['time']) && $_POST['time'] =="el") echo 'selected="selected"' ;?>>11 am </option>

    <option value="tw" <?php if(isset($_POST['time']) && $_POST['time'] =="tw") echo 'selected="selected"' ;?>>12 pm </option>

    <option value="one" <?php if(isset($_POST['time']) && $_POST['time'] =="one") echo 'selected="selected"' ;?>>1 pm </option>
</select>
<span><?php echo $time_err  ;?></span>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?></textarea>
<span><?php echo $comments_err  ;?></span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"'  ;?>>Yes</li>
</ul>
<span><?php echo $privacy_err  ;?></span>

<input type="submit" value = "Send it">

<p><a href="">Reset</a></p>

</fieldset>


</form>    
</body>
</html>