<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password, "admission");

    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
if(isset($_POST['aa'])){


    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    $school = $_POST['school'];
    $marks = $_POST['marks'];
    $text = $_POST['text'];


    $sql = "INSERT INTO `admission_table` (`S.No`, `Name`, `Mail`, `Number`, `School`, `Marks`, `Text`, `DT`) VALUES (NULL, '$name',' $mail', '$number', '$school', '$marks', '$text', current_timestamp())";
    mysqli_query($con,$sql);

    header('Location: index.php');

}
