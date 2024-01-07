<?php
include 'mod\entreptiseDAO.php';

class controller_entreprise{
   function get_entreprisee(){
    $entrepriseDAO = new EntrepriseDAO();
    $entreprise = $entrepriseDAO->getEntreprises();
    include 'vue\addBus.php';
   } 
}

?>