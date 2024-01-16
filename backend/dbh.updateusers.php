<?php
include './dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Valentino - Update Users</title>
    <link rel="stylesheet" href="../frontend/admin/css/addusers.css">
    <link rel="stylesheet" href="../frontend/admin/css/sidebar.css">
    <script src="../frontend/admin/js/updateusers.js" defer></script>
</head>

<body>
    <?php
    include './sidebar.php';

    $name =  $email = $address = $pwd = '';

    if (isset($_GET['updateusers'])) {
        $id = $_GET['updateusers'];
        $query = "SELECT * FROM `users` WHERE user_id = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            $row = mysqli_fetch_assoc($queryRun);
            $name = $row['name'];
            $email = $row['email'];
            $address = $row['address'];
            // $uname = $row['username'];
            // $pwd = $row['password'] ;
        } else {
            die(mysqli_error($conn));
        }
    }

    if (isset($_POST['submit'])) {
        $id = $_GET['updateusers'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        // $uname = $_POST['uname'];
        // $pwd = $_POST['pwd'];


        $query = "UPDATE `users` SET name = '$name', email = '$email', address = '$address' WHERE user_id = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            echo "<script>alert('Successfully updated user details')</script>";
            header('Location: ../frontend/admin/php/show_users.php');
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>

    <div class="content">
        <div class="title">
            <h2>Update Users</h2>
        </div>
        <form action="" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Enter Full Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>" required>

            </div>
            
            <div class="input-group">
                <label>Enter Email</label>
                <input type="text" name="email" id="emailInput" onblur="validateEmail()" value="<?php echo $email; ?>" required>

            </div>
            <div class="input-group">
                <label>Enter Address</label>
                <input type="text" name="address" value="<?php echo $address; ?>" required>

            </div>
            
            <input type="submit" name="submit" value="Update User" class="btn">
        </form>
    </div>
</body>

</html>