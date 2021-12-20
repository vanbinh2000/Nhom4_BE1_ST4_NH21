<?php
class User extends Db
{
    public function CheckLogin($email, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM users WHERE `email` = ? and `password` = ?");
        $password = md5($password);
        $sql->bind_param("ss", $email, $password);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }       
    }
    public function getAllUsers()
    {
        $sql = self::$connection->prepare("SELECT * FROM users");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    } 
}
?>