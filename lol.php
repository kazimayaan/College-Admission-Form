<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error());

    }

    $name = $_POST['Name'];
    $mail = $_POST['Mail'];
    $number = $_POST['Number'];
    $school = $_POST['School'];
    $marks = $_POST['Marks'];
    $text = $_POST['Text'];

    $sql = "INSERT INTO `admission`(`Name`, `Mail`, `Number`, `School`, `Marks`, `Text`, `DT`) VALUES (`$name`, `$mail`,`$number`, `$school`, `
    $marks`,`$text`, current_timestamp());";

    echo $sql;


echo "hello";



?>