<?php 
    session_start();
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    $product = new Product;
    $id = isset($_GET['id']) ? $_GET['id'] :'';
    
    if(isset($_SESSION['cart']))
    {

        if(isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]['qty']++;
        }
        else
        {
            $_SESSION['cart'][$id]['qty'] = 1;
        }
       
        header("Location:store.php");exit();
    }
    else
    {
        
        header("Location:store.php");exit();
    }
