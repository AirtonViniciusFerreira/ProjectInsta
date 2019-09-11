<?php
    if(!$_SESSION['subscription']){
        header('Location: ../login.php');
        exit();
    }
    unset($_SESSION['error']);
?>