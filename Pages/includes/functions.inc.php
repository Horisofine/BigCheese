<?php

function emptyInputClientSignUp($first_name, $last_name, $email, $password, $passwordconf) {
    
    $result;
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($passwordconf)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {

    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function emailExists($conn, $email) {

    $sql = "SELECT * FROM clients WHERE email_address = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../client_signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultsData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultsData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createClient($conn, $first_name, $last_name, $email, $password) {

    $sql = "INSERT INTO clients (first_name, last_name, email_address, pass_word) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../client_signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $first_name, $last_name, $email, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../client_signup.php?error=none");
    exit();
}

