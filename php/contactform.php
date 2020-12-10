<?php 

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$message = $_Message["message"];

if (empty($name) || empty($message) || empty($email)){
    echo "Please fill all the fields!"
}
else {
    mail("itsrohitpatel03@gmail.com", "Myportfolio", $message, "From: $name <$email>");
    echo "<script type='javascript/text'> alert('Your message sent successfully');
        window.history.log(-1);
        </script>";
        
}

?> 