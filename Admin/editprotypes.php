<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    
    $id = $_POST['id'];

    $protype -> getEditProtypes($name,$id);
    var_dump($protype);
   
}
header("location:protypes.php");