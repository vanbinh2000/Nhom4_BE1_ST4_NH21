<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
if (isset($_GET["id"])) {
    $protype -> getDelProtype($_GET["id"]);
}
header("location:protypes.php");