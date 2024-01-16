<?php
session_start();
include '../../../backend/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentino - Dashboard</title>
    <link rel="stylesheet" href="../css/sidebar.css">
</head>

<body>
    <div class="sidebar">

        <div class="logo">
            <img src="../images/logo.png">
            <span>Valentino</span>
        </div>

        <a href="./dashboard.php">Home</a>
        <a href="./show_users.php">User Management</a>
        <a href="./show_contact.php">Contact Support</a>
        <a href="./show_payment_shipping_details.php">Shipping & Card Details</a>

        <a href="../../../backend/dbh.logout.php" class="lower-left">Logout</a>
    </div>

    <div class="profile">

        <a href="http://www.google.com">
            <img src="../images/avatar.png">
        </a>
    </div>
</body>

</html>