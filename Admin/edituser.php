<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new user;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $id = $_POST['id'];

    $user -> getEditUsers($name,$email,$pass,$id);
    var_dump($user);
   
}
header("location:users.php");