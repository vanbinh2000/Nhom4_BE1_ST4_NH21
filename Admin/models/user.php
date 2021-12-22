<?php
class user extends Db
{
    public function getAllUsers()
    {
        $sql = self::$connection->prepare("SELECT * FROM users");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAddUsers($name, $email, $password)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`(`fullname`, `email`, `password`) VALUES (?,?,?)");
        $password = md5($password);
        $sql->bind_param("sss", $name, $email, $password);
        return $sql->execute();
    }
    public function getDelUsers($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `users` WHERE `id` =?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getEditUsers($name, $email, $pass, $id)
    {
        $sql = self::$connection->prepare("UPDATE `users` SET
            `fullname`=?, `email`=?, `password`=? WHERE `id` = ?");
        $pass = md5($pass);
        $sql->bind_param("sssi", $name, $email, $pass, $id);
        return $sql->execute(); //return an object
    }
    public function getUserById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object

        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
