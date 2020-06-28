<?php

class Manager
{
    private $pdo = null;
    protected $tableName;
    protected $className;

    private function getPDO()
    {
        //Connexion est fermée
        if ($this->pdo == null) {
            try {
                $this->pdo = new PDO("mysql:host=localhost;port=3308;dbname=reservation", "root", "");
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $ex) {
                die("Erreur de Connexion");
            }
        }

        return $this->pdo;
    }

    private function closePDO()
    {
        if ($this->pdo != null) {
            $this->pdo = null;
        }
    }

    public function executeSelect($sql)
    {
        $this->pdo = $this->getPDO();
        //Traitement
        $result = $this->pdo->query($sql);
        //$result->fetch()
        $data = [];
        foreach ($result as $rowBD) {
            //ORM=> tuple BD transformer en Objet
            $data[] = new $this->className($rowBD);
        }
        $this->closePDO();
        return $data;
    }

    
    public function executeUpdate($sql){
        $this->pdo=$this->getPDO();
        $nbreLigne= $this->pdo->exec($sql);
        $this->closePDO();
        return $nbreLigne;
    }
}