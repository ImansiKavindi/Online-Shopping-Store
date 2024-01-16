<?php
include './dbh.inc.php';

// Shipping details
$full_name = $_POST['full_name'];
$address = $_POST['Address'];
$city = $_POST['City'];
$province = $_POST['Province'];
$mobile_number = $_POST['Mobile'];

// Card details
$card_number = $_POST['card_number'];
$expire_date = $_POST['exp_date'];
$cvc = $_POST['cvc'];
$card_holder_name = $_POST['c_holder'];

// Check if all fields are filled
if (empty($full_name) || empty($address) || empty($city) || empty($province) || empty($mobile_number) || empty($card_number) || empty($expire_date) || empty($cvc) || empty($card_holder_name)) {
    echo "Please fill all the required fields.";
} else {
    // Validate the credit card number
    if (strlen($card_number) === 16) {
        $sql_shipping = "INSERT INTO shipping_details (name, address, city, province, mobileN) VALUES ('$full_name', '$address', '$city', '$province', '$mobile_number')";
        $sql_payment = "INSERT INTO payment_details (cardNumber, cvc, expireDate, cardHolderName) VALUES ('$card_number', '$cvc', '$expire_date', '$card_holder_name')";

        if (mysqli_query($conn, $sql_shipping) && mysqli_query($conn, $sql_payment)) {
            header("Location: ../frontend/pages/userAcc.php");
            exit(); // exit after the redirect
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // Close the database connection
        mysqli_close($conn);
    } else {
        // Credit card number is not valid, display a JavaScript alert message
        echo '<script>alert("Please enter a 16-digit credit card number."); window.location.href = "../frontend/pages/userAcc.php";</script>';
    }
}
?>
