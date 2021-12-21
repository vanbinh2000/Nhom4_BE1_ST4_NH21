<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['protype'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $feature = $_POST['feature'];
    $create_at = $_POST['create'];
    $hangton = $_POST['Hangton'];

    $product -> getAddProduct($name,$manu_id,$type_id,$price,$image,$desc,$feature, $create_at, $hangton);
        //upload hinh

        $target_dir = "../img/";
        $target_file = $target_dir. basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
}
header("location:products.php");