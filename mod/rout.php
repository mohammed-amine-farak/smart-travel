<?php
class route{
    private $id;
    private $distance;
    private $durée;
    private $ville_de_départ;
    private $ville_de_destination;

    public function __construct($id,$distance,$durée,$ville_de_départ,$ville_de_destination){
        $this->id=$id;
        $this->distance=$distance;
        $this->durèe=$durée;
        $this->ville_de_départ=$ville_de_départ;
        $this->ville_de_destination=$ville_de_destination;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of distance
     */ 
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Get the value of durée
     */ 
    public function getDurée()
    {
        return $this->durée;
    }

    /**
     * Get the value of ville_de_départ
     */ 
    public function getVille_de_départ()
    {
        return $this->ville_de_départ;
    }

    /**
     * Get the value of ville_de_destination
     */ 
    public function getVille_de_destination()
    {
        return $this->ville_de_destination;
    }
}
?>