<?php

include './dbh.inc.php';

if(isset($_POST['submit']))
{
    $Full_Name = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $message = $_POST['Message'];  require_once './dbh.function.php';

    addMessage($conn, $Full_Name, $Email, $message);
     
     
}


?>