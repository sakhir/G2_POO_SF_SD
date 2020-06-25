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
    public function index()
    {
        $this->view('etudiants/index');
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