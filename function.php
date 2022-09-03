<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password, "admission");

    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error());

    }

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    $school = $_POST['school'];
    $marks = $_POST['marks'];
    $text = $_POST['text'];

    $sql = "INSERT INTO `admission`(`Name`, `Mail`, `Number`, `School`, `Marks`, `Text`, `DT`) VALUES (`$name`, `$mail`,`$number`, `$school`, `
    $marks`,`$text`, current_timestamp());";

    $con->query($sql);

echo "hello";
echo $sql;



?>