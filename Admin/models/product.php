<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes`,`manufactures` 
        WHERE `products`.`type_id` = `protypes`.`type_id`
        AND `products`.`manu_id`=`manufactures`.`manu_id`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object

        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAddProduct($name,$manu_id,$type_id,$image,$price,$desc,$feature,$created_at)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`,`manu_id`,`type_id`,`price`,`image`,`description`,`feature`,`created_at`) VALUES(?,?,?,?,?,?,?,?)");
        $sql->bind_param("siiissis",$name,$manu_id,$type_id,$image,$price,$desc,$feature,$created_at);
        return $sql->execute();

    }
    public function getDelProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id` =?");
        $sql->bind_param("i",$id);
        return $sql->execute();
    }
}

