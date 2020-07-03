<?php 
    $to = "carrentalsarajevo@gmail.com"; // this is your Email address
    $car = $_POST['car'];
    $pickup = $_POST['pickup'];
    $dropoff = $_POST['dropoff'];
    $dateIn = $_POST['dateIn'];
    $dateOut = $_POST['dateOut'];
    $full_name = $_POST['name'];
    $from = $_POST['email']; 
    $phone = $_POST['phone'];
    $message = $full_name . " wrote the following:" . "\n\nEmail: " . $from . "\n\nPhone: " . $phone . "\n\nCar: " . $car . "\n\nPick Up: " . $pickup . ", Date & Time: " . $dateIn . "\n\nDrop Off: " . $dropoff . ", Date & Time: " . $dateOut;
    mail($to,"Reservation",$message,"From: carrentalsarajevo@gmail.com");
    header("Location: reserved.php")
?>
