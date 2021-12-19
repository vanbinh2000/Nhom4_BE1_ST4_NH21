<?php
class Protype extends Db{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAddProtype($name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`) VALUES (?)");
        $sql->bind_param("s",$name);
        return $sql->execute();

    }
    public function getDelProtype($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id` =?");
        $sql->bind_param("i",$id);
        return $sql->execute();
    }
    public function getEditProtypes($name,$id)
    {
        if ($image == null) {

            $sql = self::$connection->prepare("UPDATE `protypes` SET
            `type_name`=? WHERE `type_id` = ?");
            $sql->bind_param("si",$name,$id);
        }
        else    {
            $sql = self::$connection->prepare("UPDATE `products` SET
            `name`=? WHERE `id` = ?");
            $sql->bind_param("isi",$id, $name,$id);
        }
        return $sql->execute(); //return an object
    }
    public function getProtypeById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `protypes` WHERE `type_id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object

        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}