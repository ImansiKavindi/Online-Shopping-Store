<?php
    include './dbh.inc.php';

    if(isset($_GET['deletecontact'])){
        $id = $_GET['deletecontact'];

        $query = "DELETE from `contact_us` WHERE id = '$id'";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../frontend/admin/php/show_contact.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>
