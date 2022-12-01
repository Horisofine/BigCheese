<?php

    // Makes sure the user accessed this file through the submit button
    if (isset($_POST["submit"])) {
        
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordconf = $_POST["password_confirm"];

        require_once 'dbConfig.inc.php';
        require_once 'functions.inc.php';

        // Checking if inputs are empty
        if (emptyInputClientSignUp($first_name, $last_name, $email, $password, $passwordconf) !== false) {
            header("location: ../client_signup.php?error=emptyInput");
            exit();
        }

        // Invalid Email
        if (invalidEmail($email) !== false) {
            header("location: ../client_signup.php?error=invalidEmail");
            exit();
        }

        // Email exists
        if (emailExists($conn, $email) !== false) {
            header("location: ../client_signup.php?error=emailTaken");
            exit();
        }

        createClient($conn, $first_name, $last_name, $email, $password);
    }
    else {
        header("location: ../client_signup.php");
    }

