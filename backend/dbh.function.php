<?php
// Inserting Data
function createUser($conn, $name, $email, $address, $pwd, $cpwd)
{

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(name,email,address,password)
         VALUES('$name', '$email', '$address', '$hashedPwd')";
    $queryRun = mysqli_query($conn, $query);
    header('location: ../frontend/pages/login.php');
    exit();
}

function addUser($conn, $name, $email, $address, $pwd, $cpwd)
{

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(name,email,address,password)
         VALUES('$name', '$email', '$address', '$hashedPwd')";
    $queryRun = mysqli_query($conn, $query);
    header('location: ../frontend/admin/php/show_users.php');
    exit();
}

function emailExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../frontend/pages/signup.php?error=stmtfailed');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
}
function addMessage($conn, $Full_Name, $Email, $Message)
{
    $query = "INSERT INTO contact_us(Full_Name, Email, Message) 
    VALUES ('$Full_Name','$Email','$Message')";
    $queryRun = mysqli_query($conn, $query);
    header('location:../frontend/pages/contact_us.php');
    exit();
}