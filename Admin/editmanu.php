<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $image = $_FILES['logo']['name'];
    $id = $_POST['id'];

    $manufacture->getEditManufacture($name, $image, $id);
}
header('location:manufactures.php');
