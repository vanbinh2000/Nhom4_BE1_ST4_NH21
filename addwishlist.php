<?php
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    $product = new Product;
    $id = $_GET['id'];
    $getAllproducts = $product->getProductById($id);
    $product_cart = array();
    foreach($getAllproducts as $value)
    {
        $product_cart[$value['id']] = $value;
    }
    //$detail = $product_cart[$id];
    //echo"<pre>";
    //print_r($detail);
    if(isset($_POST['add_wish']))
    {
        if(!isset($_SESSION['wish']) || $_SESSION['wish'] == null)
        {
            $product_cart[$id]['qty'] = 1;
            $_SESSION['wish'][$id] = $product_cart[$id];
           
        }
        else{
            if(array_key_exists($id, $_SESSION['wish'])){
        
            $_SESSION['wish'][$id]['qty'] ==1;
            }
            else{
                $product_cart[$id]['qty'] = 1;
                $_SESSION['wish'][$id] = $product_cart[$id];
            }
        }
       header("location:listwish.php");
    }
  
?>