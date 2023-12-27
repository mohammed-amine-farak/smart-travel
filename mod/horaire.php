<?php
class hraire
{

private $id_hor
private $heure_dep
private $heure_arri
private $sieg_dispo
private $date_
private $fk_bus
private $fk_vil_dep
private $fk_vil_arv

public function __construct($id_hor,$heure_dep,$heure_arri,$sieg_dispo,$date_,$fk_bus,$fk_vil_arv,$fk_vil_dep){
      $this->id_hor = $id_hor;
      $this->heure_dep = $heure_dep;
      $this->heure_arri = $heure_arri;
      $this->sieg_dispo = $sieg_dispo;
      $this->date = $date_;
      $this->bus = $fk_bus;
      $this->vil_dep = $fk_vil_dep;
      $this->vill_arv = $fk_vil_arv;
}


/**
 * Get the value of id_hor
 */ 
public function getId_hor()
{
return $this->id_hor;
}

/**
 * Get the value of heure_dep
 */ 
public function getHeure_dep()
{
return $this->heure_dep;
}

/**
 * Get the value of heure_arri
 */ 
public function getHeure_arri()
{
return $this->heure_arri;
}

/**
 * Get the value of sieg_dispo
 */ 
public function getSieg_dispo()
{
return $this->sieg_dispo;
}

/**
 * Get the value of date_
 */ 
public function getDate_()
{
return $this->date_;
}

/**
 * Get the value of fk_bus
 */ 
public function getFk_bus()
{
return $this->fk_bus;
}

/**
 * Get the value of fk_vil_dep
 */ 
public function getFk_vil_dep()
{
return $this->fk_vil_dep;
}

/**
 * Get the value of fk_vil_arv
 */ 
public function getFk_vil_arv()
{
return $this->fk_vil_arv;
}
}
?>