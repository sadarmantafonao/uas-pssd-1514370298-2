<?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
    echo "Login anda <strong>BERHASIL </strong>";
    echo "<a href='logout.php'>Logout</a>";
    }else{
        echo header("location:formlogin.php");
    }
?> 