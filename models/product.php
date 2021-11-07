<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
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
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
//get laptop
public function  getLapTops(){
    $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes` WHERE `products`.`type_id` = `protypes`.`type_id`AND `protypes`.`type_id` = 2");
    $sql ->execute();
    $items = array();
    $items = $sql ->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}
//get smartphone
public function  getSmartPhone(){
    $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes` WHERE `products`.`type_id` = `protypes`.`type_id`AND `protypes`.`type_id` = 1");
    $sql ->execute();
    $items = array();
    $items = $sql ->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}
//get pc
public function  getPC(){
    $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes` WHERE `products`.`type_id` = `protypes`.`type_id`AND `protypes`.`type_id` = 4");
    $sql ->execute();
    $items = array();
    $items = $sql ->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}
//get Accessories
public function  getAccessories(){
    $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes` WHERE `products`.`type_id` = `protypes`.`type_id`AND `protypes`.`type_id` = 3");
    $sql ->execute();
    $items = array();
    $items = $sql ->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}
//get Tablet
public function  getTablet(){
    $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes` WHERE `products`.`type_id` = `protypes`.`type_id`AND `protypes`.`type_id` = 5");
    $sql ->execute();
    $items = array();
    $items = $sql ->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}
}