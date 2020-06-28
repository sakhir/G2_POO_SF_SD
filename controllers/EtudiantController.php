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

    public function AddChambre()
    { 
        
        if (isset($_POST["ajouterc"])) {
            extract($_POST);
        // var_dump($_POST);
         //die();
         $num=$_POST['numero'];
         $numb=$_POST['numerobat'];
         $typ=$_POST['type'];
         $chambre  = new ChambreManager();
         $this->data = $chambre->AjouterChambre($num,$numb,$typ);
         $tab=array($this->data);
        $this->data=$tab;
    
            $this->view('etudiants/index',$this->data);
        }
    }
    
    public function AddEtudiant()
    { 
        
        if (isset($_POST["ajoutere"])) {
         
         $mat=$_POST['matricule'];
         $no=$_POST['nom'];
         $pr=$_POST['prenom'];
         $tel=$_POST['tel'];
         $email=$_POST['email'];
         $ddn=$_POST['ddn'];

         $etudiant  = new EtudiantManager();
         $this->data = $etudiant->AjouterEtudiant($mat,$no,$pr,$email,$tel,$ddn);
         $tab=array($this->data);
        /* var_dump($tab);
         die(); */ 
        $this->data=$tab;
    
            $this->view('etudiants/indexE',$this->data); 
        }
    }

    public function SupprimerChambre($id)
    {   
        
        $chambre  = new ChambreManager();
        $this->data = $chambre->SupprimerChambre($id);
        $tab=array($this->data,$id);
        $this->data=$tab;
         $this->view('etudiants/supchambre',$this->data);
        
        
    }

    public function SupprimerEtudiant($id)
    {   
        
        $etudiant  = new EtudiantManager();
        $this->data = $etudiant->SupprimerEtudiant($id);
        $tab=array($this->data,$id);
        $this->data=$tab;
         $this->view('etudiants/supetudiant',$this->data);
        
        
    }
}