<?php

class Entreprise{
  
    private $name_entreprise;
    private $image;

    public function __construct($name_entreprise,$image){
     
        $this->name_entreprise = $name_entreprise;
        $this->image = $image;
    }

  

    /**
     * Get the value of name_entreprise
     */ 
    public function getName_entreprise()
    {
        return $this->name_entreprise;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }
}

?>