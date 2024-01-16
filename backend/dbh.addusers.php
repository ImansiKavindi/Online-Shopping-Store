<?php
    include './dbh.inc.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];

        require_once './dbh.function.php';
        

        if(emailExists($conn, $email) !== false){
            // header('location: ../frontend/admin/php/addusers.php?error=emailtaken');
            echo "<script>alert('Email Already Exists!');</script>";
        }
     
        addUser($conn, $name, $email, $address, $pwd , $cpwd);
    	}
?>