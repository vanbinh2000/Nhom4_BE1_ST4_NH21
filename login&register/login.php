<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";

$user = new User;
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($user->CheckLogin($email, $password)) {
        $_SESSION['email'] = $email;
        header('location:../admin');
    } else {
        header('location:indexlogin.php');
    }
        
}