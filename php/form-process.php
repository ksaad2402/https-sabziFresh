<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "saad ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "ksaad2402@gmail.com ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errorMSG .= "email ";
} else {
    $subject = $_POST["guest"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "new email recieved ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "ksaad2402@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "saad: ";
$Body .= $name;
$Body .= "\n";
$Body .= "ksaad2402@gmail.com: ";
$Body .= $email;
$Body .= "\n";
$Body .= "saad: ";
$Body .= $guest;
$Body .= "\n";
$Body .= "fresh: ";
$Body .= $event;
$Body .= "\n";
$Body .= "hi: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>