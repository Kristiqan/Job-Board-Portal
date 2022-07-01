<?php
    session_start();
    if(!isset($_SESSION["Email"])) {
        header("Location: Login.php");
        exit();
    }
?>