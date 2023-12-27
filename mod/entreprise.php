<?php

class entreprise{
    private $id;
    private $name_entreprise;
    private $image;

    public function __construct($id,$name_entreprise,$image){
        $this->id = $id;
        $this->name_entreprise = $name_entreprise;
        $this->image = $image;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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