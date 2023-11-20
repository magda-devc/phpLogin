<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["userid"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (invaliduserid($username) !== false) {
        header("location: ../signup.php?error=invaliduserid");
        exit();
    }
    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernamenotavailable");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
}
else {
    header("location: ../signup.php");
    exit();
}