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

    $name =  $address = $city = $province = $mobile_number = $card_number = $expire_date = $card_holder_name = '';

    if (isset($_GET['updatepc'])) {
        $id = $_GET['updatepc'];
        $query = "SELECT s.*, p.* FROM shipping_details s JOIN payment_details p ON s.id = p.id WHERE s.id = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            $row = mysqli_fetch_assoc($queryRun);
            $name = $row['name'];
            $address = $row['address'];
            $city = $row['city'];
            $province = $row['province'];
            $mobile_number = $row['mobileN'];
            $card_number = $row['cardNumber'];
            $cvc = $row['cvc'];
            $expire_date = $row['expireDate'];
            $card_holder_name = $row['cardHolderName'];
        } else {
            die(mysqli_error($conn));
        }
    }

    if (isset($_POST['submit'])) {
        $id = $_GET['updatepc'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $mobile_number = $_POST['mobile_number'];
        $card_number = $_POST['card_number'];
        $cvc = $_POST['cvc'];
        $expire_date = $_POST['expire_date'];
        $card_holder_name = $_POST['card_holder_name'];

        // Update query for shipping_details table
    $query1 = "UPDATE shipping_details SET 
    name = '$name',
    address = '$address',
    city = '$city',
    province = '$province',
    mobileN = '$mobile_number'
    WHERE id = '$id';";

// Update query for payment_details table
$query2 = "UPDATE payment_details SET 
    cardNumber = '$card_number',
    expireDate = '$expire_date',
    cvc = '$cvc',
    cardHolderName = '$card_holder_name'
    WHERE id = '$id';";

// Run the queries
$queryRun1 = mysqli_query($conn, $query1);
$queryRun2 = mysqli_query($conn, $query2);

// Check if the queries were successful
if ($queryRun1 && $queryRun2) {
    echo "<script>alert('Successfully updated user details')</script>";
    header('Location: ../frontend/admin/php/show_payment_shipping_details.php');
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
                <label>Enter Address</label>
                <input type="text" name="address" value="<?php echo $address; ?>" required>
            </div>

            <!-- Additional Fields -->
            <div class="input-group">
                <label>Enter City</label>
                <input type="text" name="city" value="<?php echo $city; ?>" required>
            </div>

            <div class="input-group">
                <label>Enter Province</label>
                <input type="text" name="province" value="<?php echo $province; ?>" required>
            </div>

            <div class="input-group">
                <label>Enter Mobile Number</label>
                <input type="text" name="mobile_number" value="<?php echo $mobile_number; ?>" required>
            </div>

            <div class="input-group">
                <label>Enter Card Number</label>
                <input type="text" name="card_number" value="<?php echo $card_number; ?>" required>
            </div>

            <div class="input-group">
                <label>Enter CVC Number</label>
                <input type="text" name="cvc" value="<?php echo $cvc; ?>" required>
            </div>

            <div class="input-group">
                <label>Enter Expire Date</label>
                <input type="text" name="expire_date" value="<?php echo $expire_date; ?>" required>
            </div>

            <div class="input-group">
                <label>Enter Card Holder Name</label>
                <input type="text" name="card_holder_name" value="<?php echo $card_holder_name; ?>" required>
            </div>
            <!-- End of Additional Fields -->

            <input type="submit" name="submit" value="Update User" class="btn">
        </form>
    </div>
</body>

</html>
