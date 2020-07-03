<?php 
    $to = "carrentalsarajevo@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $full_name . " wrote the following:" . "\n\nEmail: " . $from . "\n\nMessage: " . $_POST['message'];
    mail($to,$subject,$message,"From: carrentalsarajevo@gmail.com");
    echo "Mail was sent successfully."
?>
