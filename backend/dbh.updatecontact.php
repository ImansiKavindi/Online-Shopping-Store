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

    $Full_Name =  $Email = $Message = '';

    if (isset($_GET['updatecontact'])) {
        $id = $_GET['updatecontact'];
        $query = "SELECT * FROM `contact_us` WHERE id = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            $row = mysqli_fetch_assoc($queryRun);
            $Full_Name = $row['Full_Name'];
            $Email = $row['Email'];
            $Message = $row['Message'];
        } else {
            die(mysqli_error($conn));
        }
    }

    if (isset($_POST['submit'])) {
        $id = $_GET['updatecontact'];
        $Full_Name = $_POST['name'];
        $Email = $_POST['email'];
        $Message = $_POST['address'];

        $query = "UPDATE `contact_us` SET Full_Name = '$Full_Name', Email = '$Email', Message = '$Message' WHERE id = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            echo "<script>alert('Successfully updated user details')</script>";
            header('Location: ../frontend/admin/php/show_contact.php');
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
                <input type="text" name="name" value="<?php echo $Full_Name; ?>" required>

            </div>
            
            <div class="input-group">
                <label>Enter Email</label>
                <input type="text" name="email" id="emailInput" onblur="validateEmail()" value="<?php echo $Email; ?>" required>

            </div>
            <div class="input-group">
                <label>Enter Message</label>
                <input type="text" name="address" value="<?php echo $Message; ?>" required>
            </div>
            
            <input type="submit" name="submit" value="Update User" class="btn">
        </form>
    </div>
</body>

</html>
