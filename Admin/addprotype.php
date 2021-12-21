<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;

if (isset($_POST['submit'])) {
  
    $name = $_POST['name'];
    
    $protype -> getAddProtype($name);
       
}
header("location:protypes.php");