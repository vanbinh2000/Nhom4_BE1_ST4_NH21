<?php
    session_start();
    $id = $_GET['id'];
    if(isset($_SESSION['wish'][$id])){
        unset($_SESSION['wish'][$id]);
    }
    header("location:listwish.php");
?>