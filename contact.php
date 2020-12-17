<?php 
if(isset($_POST['submit'])){
    $to = "mothannaaz@yahoo.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = "subject";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>