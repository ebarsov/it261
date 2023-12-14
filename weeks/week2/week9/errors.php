<?php
// our errors file that we will be using a foreach loop
// array_push - different message for different errors

// if we have errors - we need to display them
error_reporting(E_ALL);
ini_set('display_errors', '1');


if(count($errors) > 0): ?>

<div class="errors">
    <?php foreach($errors as $error) : ?>
<p>
    <?php echo $error; ?>
</p>
<?php endforeach; ?>

</div> <!-- end div-->

<?php endif ;?> 

<!-- // Check if $errors is set and not null
/* if (isset($errors) && is_array($errors) && count($errors) > 0) {
    echo '<div class="errors">';
    foreach ($errors as $error) {
        echo '<p>' . htmlspecialchars($error) . '</p>';
    }
    echo '</div>';
}

; ?> */ -->