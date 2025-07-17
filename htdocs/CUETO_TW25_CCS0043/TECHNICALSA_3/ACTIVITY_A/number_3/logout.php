<?php
    session_name("StaticLoginSession");
    session_start();
    session_unset();  
    session_destroy(); 

    header("Location: login.php"); 
    exit();
?>
