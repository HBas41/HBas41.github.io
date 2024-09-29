<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "Form:".$name."<".$email.">\r\n";

$recipient = "hasan.bas@orange.fr";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contactnous.css" />
</head>
<body>
    <div class="container">
    <h1>Merci de nous avoir contactez, nous vous réprondons dans les plus bref délais !</h1>
    <p class="back">Go back to the <a href="contactus.html">Homepage</a>.</p>
  </div>
</body>
</html>




';

?>