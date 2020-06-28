<?php

class Chambre
{
    private $numero;
    private $numerobat;
    private $type;

    public function __construct($data = [])
    {
        $this->hydrate($data);
        // $this->setLogin($data['login']);
    }
    protected function hydrate($data = [])
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

        /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

        /**
     * Get the value of numerobat
     */
    public function getNumerobat()
    {
        return $this->numerobat;
    }

    /**
     * Set the value of numerobat
     *
     * @return  self
     */
    public function setNumerobat($numerobat)
    {
        $this->numerobat = $numerobat;

        return $this;
    }
   
           /**
     * Get the value of numero
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

 
 

}