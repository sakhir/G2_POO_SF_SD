<?php

class Controller
{

    protected $viewPath = 'views/';
    protected $layout;

    public function view($view, $data = [])
    {
        if (file_exists($this->viewPath . $view . '.php')) {
            ob_start();
            extract($data);
            require($this->viewPath . $view . '.php');
            $content = ob_get_clean();
            require($this->viewPath . 'layouts/' . $this->layout . '.php');
        }
    }

    public function redirect($location = '')
    {
        if ($location == '') {
            header('location:' . ROOTURL);
        } else {
            header('location:' . ROOTURL . '/' . $location);
        }
    }
}