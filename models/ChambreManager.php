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

    
    public function AjouterChambre($num,$numbat,$typ)
    {
        $sql =" INSERT INTO chambre(numero, numerobat, typ) values('".$num."','".$numbat."','".$typ."');";
        $result = $this->executeUpdate($sql);
        if ($result == 0) {
            return null;
        }
        return  $result;
    }

    public function SupprimerChambre($id)
    {
        $sql ="  DELETE FROM  chambre WHERE numero='".$id."';";
        $result = $this->executeUpdate($sql);
        if ($result == 0) {
            return null;
        }
        return  $result;
    }
}