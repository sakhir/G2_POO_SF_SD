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
    
    public function AjouterEtudiant($mat,$nom,$pre,$em,$tel,$ddn)
    {   
         
        $sql =" INSERT INTO etudiant (matricule,nom,prenom,email,telephone,date_de_naissance) VALUES
        ('".$mat."','".$nom."','".$pre."','".$em."','".$tel."','".$ddn."');";
        $result = $this->executeUpdate($sql);
        if ($result == 0) {
            return null;
        }
        return  $result;
    }
    public function SupprimerEtudiant($id)
    {
        $sql ="  DELETE FROM  etudiant WHERE matricule='".$id."';";
        $result = $this->executeUpdate($sql);
        if ($result == 0) {
            return null;
        }
        return  $result;
    }
}