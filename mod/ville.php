<?php

class ville{
    private $nom_ville;

    public function __construct($nom_ville){
          $this->nom_ville = $nom_ville;
    }

    /**
     *Get the value of nom_ville
     */ 
    public function getNom_ville()
    {
        return $this->nom_ville;
    }
}

?>