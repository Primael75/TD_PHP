<?php
include
abstract class User implements UserInterface{
    private $id; //encapsulation à l'aide du mot clé private
    protected $email;
    private $password;

    public function _construct($mail , $pwd){
        $this->email=$mail;
        $this->password=$pwd;
    }

    public function getId() {
          return $this->id;
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
        $this->email = $email;

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
?>