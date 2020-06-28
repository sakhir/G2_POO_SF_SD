<?php

class Etudiant
{
    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $date_de_naissance;

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
     * Get the value of matricule
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    } 
 
 
           /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    } 
 

         /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom= $prenom;

        return $this;
    } 
    
         /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email= $email;

        return $this;
    } 

    
         /**
     * Get the value of telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */
    public function setTelephone($telephone)
    {
        $this->telephone= $telephone;

        return $this;
    } 

    
     /**
     * Get the value of date de naissance 
     */
    public function getDate_de_naissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * Set the value of date de naissance
     *
     * @return  self
     */
    public function setDate_de_naissance($date_de_naissance)
    {
        $this->date_de_naissance= $date_de_naissance;

        return $this;
    } 
}