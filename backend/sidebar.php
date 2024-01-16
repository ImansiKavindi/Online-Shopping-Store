<?php
session_start();
include './dbh.inc.php';
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
            <img src="../frontend/admin/images/logo.png">
            <span>Valentino</span>
        </div>

        <a href="../frontend/admin/php/dashboard.php">Home</a>
        <a href="../frontend/admin/php/show_users.php">User Management</a>
        <a href="../frontend/admin/php/show_contact.php">Contact Support</a>
        <a href="../frontend/admin/php/show_payment_shipping_details.php">Shipping & Card Details</a>
        <a href="../frontend/admin/php/dbh.logout.php" class="lower-left">Logout</a>
    </div>

    <div class="profile">
        <a href="http://www.google.com">
            <img src="../frontend/admin/images/avatar.png" />
        </a>
    </div>
</body>

</html>