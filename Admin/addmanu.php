<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
//add manufacture 
$manufacture = new Manufacture;
if (isset($_POST['submit'])) {
  $manu_name = $_POST['name'];
  $manu_logo = $_FILES['manulogo']['name'];
  $manufacture->getAddManufacture($manu_name, $manu_logo);
  $target_dir = "../img/";
  $target_file = $target_dir.basename($_FILES['manulogo']['name']);
  move_uploaded_file($_FILES['manulogo']['tmp_name'], $target_file);
}
header("location:manufactures.php");
?>