<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new user;

if (isset($_POST['submit'])) {
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $user -> getAddUsers($name,$email,$pass);
       
}
header("location:users.php");