<?php

class Contact {

    private int $id;
    private String $lastName;
    private String $firstName;
    private String $mail;
    private String $phone;
    private String $birthDay;
    private String $file;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId() : int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id) : self{
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of lastName
     *
     * @return  String
     */ 
    public function getLastName() : String {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName) : self {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get the value of firstName
     *
     * @return  String
     */ 
    public function getFirstName() : String {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName) : self {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get the value of mail
     *
     * @return  String
     */ 
    public function getMail() : String {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail) : self {
        $this->mail = $mail;
        return $this;
    }

    /**
     * Get the value of phone
     *
     * @return  String
     */ 
    public function getPhone() : String {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone) : self {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get the value of birthDay
     *
     * @return  String
     */ 
    public function getBirthDay() : String {
        return $this->birthDay;
    }

    /**
     * Set the value of birthDay
     *
     * @return  self
     */ 
    public function setBirthDay($birthDay) : self {
        $this->birthDay = $birthDay;
        return $this;
    }

    /**
     * Get the value of file
     * 
     * @return  String
     */ 
    public function getFile() : String {
        return $this->file;
    }

    /**
     * Set the value of file
     *
     * @return  self
     */ 
    public function setFile($file) : self {
        $this->file = $file;
        return $this;
    }


}
