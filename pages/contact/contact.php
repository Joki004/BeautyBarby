<?php
if(isset($_POST['submit'])) {
    $to = "info@beautybarby.pl";
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "New form submission from " . " ID :\n" . $lastName ."\n".$firstName."\n".$phone;
    $subject .= " " . $lastName;
    $headers = "From: ".$email;
    mail($to,$subject,$message,$headers);
    echo "Thank you for your message!";
}
?>