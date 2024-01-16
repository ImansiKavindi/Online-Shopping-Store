<?php
session_start();
include '../../../backend/dbh.inc.php';

// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['email'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("Location: ../../pages/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valentino - Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
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
        <a href="http://www.google.com"><img src="../images/avatar.png"></a>
    </div>

    <?php
        $sql1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck1 = mysqli_num_rows($result1);

        $sql2 = "SELECT * FROM contact_us;";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck2 = mysqli_num_rows($result2);

    echo "
    <div class='content'>
        <div class='title'>
            <h2>Overview</h2>
        </div>

        <div class='card'>
            <div class='card-01'>
                <h3>No of User Accounts</h3>
                <p>" . $resultCheck1 . "</p>
            </div>
            <div class='card-01'>
            <h3>No of Contact Supports</h3>
            <p>" . $resultCheck2 . "</p>
        </div>
            <div class='card-01'>
            <h3>Admin Name</h3>
            <p>" . $_SESSION['name'] . "</p>
        </div>
        
        <div class='card-01'>
            <h3>Admin Email</h3>
            <p>" . $_SESSION['email'] . "</p>
        </div>
        </div>
        </div>
";

    
    
    ?>

</body>
</html>
