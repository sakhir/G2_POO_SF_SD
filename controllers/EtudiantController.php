<?php


class EtudiantController extends Controller
{

    public function __construct()
    {
        $this->layout = 'admin/base';
        if (!Session::get('admin')) {
            $this->redirect();
        }
    }
    public function EnregistrerEtudiant()
    {
        $this->view('etudiants/EnregistrerEtudiant');
    }

    public function ListeEtudiant()
    {
        
        $etudiants  = new EtudiantManager();
        $this->data = $etudiants->findAllData();
        
        $this->view('etudiants/ListeEtudiant',$this->data);
        

    }
    public function EnreChambre()
    {
        $this->view('etudiants/EnregistrerChambre');

    }
    public function ListeChambre()
    {
        
         $chambre  = new ChambreManager();
        $this->data = $chambre->findAllData();
        //var_dump($this->data);
        //die();
        $this->view('etudiants/ListeChambre',$this->data);
        
    }

    public function liste()
    {
        echo "Liste ";
    }

    public function show($id)
    {
        echo "id " . $id;
    }
}