<?php
class Manufacture extends Db{
    public function getAllManufacture()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAddManufacture($manu_name, $manu_logo)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`, `manu_logo`) VALUES (?,?)");
        $sql->bind_param("ss", $manu_name, $manu_logo);
        return $sql->execute();
    }
    public function getdelManufacture($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getManuByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE `manu_id`=?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getEditManufacture($manu_name, $manu_logo, $id)
    {
        if ($manu_logo == null) {
            $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`=?,`manu_logo`=? WHERE manu_id = ?");
            $sql->bind_param("ssi",$manu_name, $manu_logo, $id);
        }
        else
        {
            $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`=?,`manu_logo`=? WHERE manu_id = ?");
            $sql->bind_param("ssi",$manu_name, $manu_logo, $id);
        }
        return $sql->execute(); //return an object
    }
}