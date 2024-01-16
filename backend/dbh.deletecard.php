<?php
    include './dbh.inc.php';

    if(isset($_GET['deletepc'])){
        $id = $_GET['deletepc'];

        $queryShipping = "DELETE FROM shipping_details WHERE id = '$id'";
        $queryPayment = "DELETE FROM payment_details WHERE id = '$id'";

        $queryRunShipping  = mysqli_query($conn, $queryShipping);
        $queryRunPayment  = mysqli_query($conn, $queryPayment);

        if($queryRunShipping && $queryRunPayment){
            header("Location: ../frontend/admin/php/show_payment_shipping_details.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>
