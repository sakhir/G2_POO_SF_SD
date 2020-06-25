<?php

class Admin
{
    private $login;
    private $password;

    public function __construct($data = [])
    {
        $this->hydrate($data);
        // $this->setLogin($data['login']);
    }
    protected function hydrate($data = [])
    {
        //setLogin()
        //['login' => "admin", "password" => "admin", 'id'=>"h"];
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}