<?php
$name="";
$email="";
$comment="";

$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['message'];


?>


<!DOCTYPE html>
<html>
<head>
<title>My Form</title>
</head>
<body>

<form  action="" method="POST">
    Your name:<br><br>
    <input name="name" required type="text" value="" size="30"/><br>
    Your email:<br><br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br><br>
    <textarea name="message" rows="7" cols="30"></textarea><br><br>
    <input type="submit" value="Send email"/><br><br>
    </form>
    <?php


    echo $name;

    ?>

    </body>
    </html>