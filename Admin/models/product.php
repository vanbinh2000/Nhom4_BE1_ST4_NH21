<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes`,`manufactures` 
        WHERE `products`.`type_id` = `protypes`.`type_id`
        AND `products`.`manu_id`=`manufactures`.`manu_id` 
        ORDER BY `id` DESC");
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
    public function getAddProduct($name,$manu_id,$type_id,$image,$price,$desc,$feature,$created_at, $hangton)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`,`manu_id`,`type_id`,`price`,`image`,`description`,`feature`,`created_at`, `hangton`) VALUES(?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("siiissisi",$name,$manu_id,$type_id,$image,$price,$desc,$feature,$created_at, $hangton);
        return $sql->execute();

    }
    public function getDelProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id` =?");
        $sql->bind_param("i",$id);
        return $sql->execute();
    }
    //edit product
    public function getEditProduct($name,$manu_id,$type_id,$price,$image,$desc, $feature, $create_at, $hangton, $id)
    {
        if ($image == null) {

            $sql = self::$connection->prepare("UPDATE `products` SET
            `name`=?,`manu_id`=?,`type_id`=?,`price`=?,`description`=?,
            `feature`=?,`created_at`=?,`hangton`=? WHERE `id` = ?");
            $sql->bind_param("siiisisii", $name,$manu_id,$type_id,$price,$desc, $feature, $create_at, $hangton, $id);
        }
        else    {
            $sql = self::$connection->prepare("UPDATE `products` SET
            `name`=?,`manu_id`=?,`type_id`=?,`price`=?,`image`=?,`description`=?,
            `feature`=?,`created_at`=?,`hangton`=? WHERE `id` = ?");
            $sql->bind_param("isiiissisii", $id, $name,$manu_id,$type_id,$price,$image,$desc, $feature, $create_at, $hangton, $id);
        }
        return $sql->execute(); //return an object
    }
    //count product
    public function countProducts()
    {
        $sql = self::$connection->prepare("SELECT count(*) as SoLuong from `products`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}

