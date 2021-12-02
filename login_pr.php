<?php
session_start();
    $user=$_POST['fname'];
    $pass=$_POST['pass'];

    if($fname=='admin' and $pass='1234'); {
        $_SESSION['user']=$user;
        $_SESSION['name']="สมหญิง แสนดี";
    header( "location:page1.php" );
    }
?>