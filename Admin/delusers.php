<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new user;
if (isset($_GET["id"])) {
    $user -> getDelUsers($_GET["id"]);
}
header("location:users.php");