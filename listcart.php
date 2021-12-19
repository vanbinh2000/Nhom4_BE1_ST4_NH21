<?php
    session_start();
    if(isset($_SESSION['cart']))
    {
        var_dump($_SESSION['cart']);
    }
?>