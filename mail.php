<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $from = "info@ajaccountinglens.com"; 
    $to = "ajaccountinglens@gmail.com";
    $subject = "New message from $name: $subject";
    $body = "Name: $name\nEmail: $email\n\nmessage: $message";

    $headers = "From: $from \r\n"; 

    $headers .= "Reply-To: $email \r\n"; 

    if (mail($to, $subject, $body, $headers)) { 
        header("Location: success.html");
        exit; 
    } else {
        echo "Error: Unable to send message";
    }
}
?>
