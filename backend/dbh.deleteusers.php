<?php
    include './dbh.inc.php';

    if(isset($_GET['deleteusers'])){
        $id = $_GET['deleteusers'];

        $query = "DELETE from `users` WHERE user_id = '$id'";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../frontend/admin/php/show_users.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>
