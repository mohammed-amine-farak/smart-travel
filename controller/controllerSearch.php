<?php
 include 'mod\villeDAO.php';



class contoller_city {

  function getvilles()  {
        
   $villeDAO = new VilleDAO() ;
   $villes = $villeDAO->getVilles();
   
   include 'vue\searchform.php' ; 


    }
}
?>