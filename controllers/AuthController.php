<?php

class AuthController extends Controller
{
    public function __construct()
    {
        $this->layout = 'base';
    }
    public function login()
    {

        if (isset($_POST['connecter'])) {
            extract($_POST);
            Validations::isEmpty($login, 'login', 'le login est  obligatoire');
            Validations::isEmpty($password, 'password', 'le password est obligatoire');


            if (Validations::isValid()) {
                $admin  = new AdminManager();
                $this->adminExiste = $admin->findByLoginAndPwd($login, $password);
                if ($this->adminExiste) {
                    Session::set('admin', $this->adminExiste);
                    $this->redirect('etudiant/enregistreretudiant');
                } else {
                    $this->data['err']="Utilisateur inexistant";
                    $this->view("auth/login",$this->data);

                }
            } else {

                //var_dump(Validations::getErrors());
                $this->data['error']=Validations::getErrors();
                 $this->view("auth/login",$this->data);
              /*  var_dump($this->data);
                echo "champs vide";*/
            }
        } else 
        {

        $this->view("auth/login");

        }


        
    }

    public function logout()
    {
        Session::destroy();
        $this->redirect();
    }
}