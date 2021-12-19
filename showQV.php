<?php

require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;

$productID = $_POST['productID'];

$getProductByID = $product -> getProductById($productID);
foreach ($getProductByID as $value):
    ?> <table border='0' width = '100%'>
<tr>
    <td width="padding:50px;"><img src="./img/<?php echo $value['image']?>" width = "300px" alt="Đây là hình ảnh"></td>
    <td style="padding:20px;">
    <p><b><?php echo $value['name'] ?></b></p>
    <p >Price: <?php echo number_format($value['price']) ?>VND</p><br>
    <p><?php echo substr($value['description'],0,200) ?>...</p>
</td>
</tr>
    </table>

<?php endforeach;?>