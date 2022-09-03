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
    $num = $_POST['Number'];
    $school = $_POST['School'];
    $marks = $_POST['Marks'];
    $text = $_POST['Text'];
    $dt = $_POST['DT'];

    $sql = "INSERT INTO `admission`(`Name`, `Mail`, `Number`, `School`, `Marks`, `Text`, `DT`) VALUES (`TESTNAME`, `lol@ssnm.com`,`9353399866`, `SEi`, `96.48`,`HH`, current_timestamp());";







?>