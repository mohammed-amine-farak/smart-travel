<?php
include 'mod\routDAO.php';

class controller_rout{



function addRoute(){
   
    include 'mod\villeDAO.php';
    $villeDAO = new VilleDAO();
    $ville = $villeDAO->getVilles();
    
    if(isset($_POST['submit'])){
       
        $dureè = $_POST['dureè'];
        $destance = $_POST['destance'];
        $depart = $_POST['depart'];
        $destination = $_POST['destination'];
       
        $routDAO = new routeDAO();
        $routDAO->add_route($destance,$dureè,$depart,$destination);
        
    }
    include 'vue\addRout.php';
}
    function get_rout(){
        $routDAO = new routeDAO();
        $route = $routDAO->getRout();
        include 'vue\listRout.php';
    }
    function get_rout_by_id(){
        if(isset($_GET['id'])){
            include 'mod\villeDAO.php';
            $villeDAO = new VilleDAO();
            $ville = $villeDAO->getVilles();
            $id = $_GET['id'];
            $routDAO = new routeDAO();
            $route_by_id = $routDAO->get_rout_by_id($id);
            include 'vue\updateRoute.php';

        }
       
    }
  
    function updateRoute(){
        if(isset($_GET['submit'])){
            $id = $_GET['submit'];
            $dureè = $_GET['dureè'];
            $destance = $_GET['destance'];
            $depart = $_GET['depart'];
            $destination = $_GET['destination'];
            $routDAO = new routeDAO();
            $routDAO->update_route($id,$destance,$dureè,$depart,$destination);
            include 'vue\updateRoute.php';
            
        }
    }
}
?>