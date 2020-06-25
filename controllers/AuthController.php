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
            Validations::isEmpty($login, 'login', 'login obligatoire');
            Validations::isEmpty($password, 'password', 'password obligatoire');

            if (Validations::isValid()) {
                $admin  = new AdminManager();
                $this->adminExiste = $admin->findByLoginAndPwd($login, $password);
                if ($this->adminExiste) {
                    Session::set('admin', $this->adminExiste);
                    $this->redirect('etudiant/index');
                } else {
                    echo "unknow";
                }
            } else {

                var_dump(Validations::getErrors());
                echo "champs vide";
            }
        } else {
        }


        $this->view("auth/login");
    }

    public function logout()
    {
        Session::destroy();
        $this->redirect();
    }
}