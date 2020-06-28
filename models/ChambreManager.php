<?php
class ChambreManager extends Manager
{

    public function __construct()
    {
        $this->tableName = 'chambre';
        $this->className = 'Chambre';
    }
    public function findAllData()
    {
        $sql = "select * from chambre  ";
        $data = $this->executeSelect($sql);
        if (count($data) == 0) {
            return null;
        }
        return count($data) == 1 ? $data[0] : $data;
    }
}