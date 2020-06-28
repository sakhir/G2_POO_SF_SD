<?php
class EtudiantManager extends Manager
{

    public function __construct()
    {
        $this->tableName = 'etudiant';
        $this->className = 'Etudiant';
    }
    public function findAllData()
    {
        $sql = "select * from etudiant  ";
        $data = $this->executeSelect($sql);
        if (count($data) == 0) {
            return null;
        }
        return count($data) == 1 ? $data[0] : $data;
    }
}