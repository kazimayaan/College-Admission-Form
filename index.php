<?php
include "function.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Admission Form</title>
    <link rel="stylesheet" href="lol.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <img src="amc-800x450.jpg" class= "bg " alt="AMC College">
    <img src="amc-800x450.jpg" class= "bg1 " alt="AMC College">
    <div class="container">
        <br>
        <h1>AMC ENGINEERING COLLEGE</h1><br>
         <p>Please enter your details below to apply:</p>
         <form action="function.php" method="post">
            <fieldset>
            <legend>Application Form:</legend>
            <label for="name">Name:</label> <input type="text" name="name" id="1" placeholder="Enter name Here">
            <label for="mail">Mail:</label> <input type="email" name="mail" id="2" placeholder="Enter Mail Here">
            <label for="number">Mobile No:</label> <input type="tel" name="number" placeholder="Enter Number Here">
            <label for="school">Previous School:</label> <input type="text" name="school" placeholder="Previous School Name">
            <label for="marks">Board Marks:</label> <input type="number" name="marks" id="33" placeholder="Enter marks here">
            <!-- <label for="gender">Gender:</label> <input type="radio" name="male" id=""33>male
            <input type="radio" name="male" id=""33>female -->
            <textarea name="text" id="" cols="30" rows="10" placeholder="Tell us about yourself"></textarea>
                <input type="Submit" value="Submit" class="btn">
                <!-- <input type="reset" value="Reset"> -->
            </fieldset>
         </form>
    </div>
    <script src="jj.js"></script>
</body>
</html>