<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="arafah" AND $password=="123")
    {
        $_SESSION["username"]=$username;
        header("location:homeadmin.php");
    }else{
        header("location:formlogin.php?loginerror");
    }
?>
