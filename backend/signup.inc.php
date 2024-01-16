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
            header('location: ../frontend/pages/signup.php?error=emailtaken');
            exit();
        }
     
        createUser($conn, $name, $email, $address, $pwd , $cpwd);
    }
    else{
        echo "Data not inserted";
        header('location: ../pages/signup.php');
        exit();
    }
    
?>