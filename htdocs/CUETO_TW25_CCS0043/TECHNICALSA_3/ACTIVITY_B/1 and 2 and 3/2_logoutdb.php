<?php
    session_name("DBLoginSession");
    session_start();
    session_destroy();
    header("Location: 2_logindb.php");
    exit;
?>