<?php

class Maison{

    static private $compteur = 1;
    private $id;
    private $dateCreation;
    private $nombreChambres;
    private $surface;

    public function __construct($dateCreation, $nombreChambres, $surface){
        
        $this->setDateCreation($dateCreation);
        $this->setNombreChambres($nombreChambres);
        $this->setSurface($surface);
        $this->id=self::$compteur;
        self::$compteur++;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }


    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }


    public function getNombreChambres()
    {
        return $this->nombreChambres;
    }


    public function setNombreChambres($nombreChambres)
    {
        $this->nombreChambres = $nombreChambres;

        return $this;
    }


    public function getSurface()
    {
        return $this->surface;
    }


    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}