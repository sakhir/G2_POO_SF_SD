<?php
class AdminManager extends Manager
{

    public function __construct()
    {
        $this->tableName = 'admin';
        $this->className = 'Admin';
    }
    public function findByLoginAndPwd($login, $pwd)
    {
        $sql = "select * from admin where login='$login'  and password='$pwd' ";
        $data = $this->executeSelect($sql);
        if (count($data) == 0) {
            return null;
        }
        return count($data) == 1 ? $data[0] : $data;
    }
}