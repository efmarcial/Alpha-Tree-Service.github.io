<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message']; 

$formcontact = "From: $name \n Message: $message";
$recipent = 'efmarcial1060@gmail.com';
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipent, $formcontact,  $mailheader) or die('Error');
echo "Thank You";
    ?>

    <!-- INCLUDE YOUR SUCCESS MESSAGE BELOW -->
    Thanks for getting in touch. We'll get back to you




