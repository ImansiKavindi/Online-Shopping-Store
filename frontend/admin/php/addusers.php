<?php
include '../../../backend/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Valentino - Dashboard</title>
    <link rel="stylesheet" href="../css/addusers.css">
</head>

<body>

    <?php
    include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Add Users</h2>
        </div>
        <form action="../../../backend/dbh.addusers.php" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Enter Full Name</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="input-group">
                <label>Enter Email</label>
                <input type="text" name="email" id="emailInput" onblur="validateEmail()" required>
            </div>
            <div class="input-group">
                <label>Enter Address</label>
                <input type="text" name="address" required>
            </div>
           
            <div class="input-group">
                <label>Enter Password</label>
                <input type="text" name="pwd" id="password">
                <span id="passwordIcon"></span>
            </div>

            <div class="input-group">
                <label>Re-Enter Password</label>
                <input type="text" name="cpwd" id="password">
                <span id="passwordIcon"></span>
            </div>
            <input type="submit" name="submit" value="Add user" class="btn">
        </form>

    </div>

</body>

</html>
