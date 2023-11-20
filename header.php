<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Community Funds</title>
        <link rel="shortcut icon" href="images/flaticon1.png" type="image/x-icon">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body class="bg-light">
        <div class="nav-bar">
            <img style="background-color:white; width: 150px; height: 80px; margin-left:10px; margin-right :750px;" src="images/logo.png" alt="logo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>

            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li><a href='profile.php'>Profile</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
            }
            else {
               echo "<li><a href='login.php'>Login</a></li>";
               echo "<li><a href='signup.php'>Sign up</a></li>";
            }
            ?>
            
        </div>