<?php
include 'mod/busDAO.php';





class Create_Bus{
    function createBus() {
        include 'controller/controllerEntreprise.php';
        $entreprise = new controller_entreprise();
        $entreprise->get_entreprisee();
        if(isset($_GET["submit"])) {
           
            $immat = $_GET["immat"];
            $num_bus = $_GET["num_bus"];
            $capacité = $_GET["capcty"];
            $entreprise = $_GET["entreprise"];
            
            
            $BusDAO = new BusDAO();
            $bus = new bus($immat, $num_bus, $capacité, $entreprise);
            $BusDAO->createBus($bus);
            include 'vue/addBus.php';
          
                echo '<script>
                window.location.replace("adminbus.php");
                history.replaceState(null, null, "adminbus.php");
                </script>';
               
              
  
        }     
    }       

    public function read_the_bus(){
        $BusDAO = new BusDAO();
        $bus = $BusDAO->getbus();
        include 'vue/listofbus.php'; 
    }


    
    function read_the_form(){
       
        if(isset($_GET['id'])){
            include 'mod\entreptiseDAO.php';
            $entrepriseDAO = new EntrepriseDAO();
            $entreprise = $entrepriseDAO->getEntreprises();
            $id = $_GET['id'];
            $BusDAO = new BusDAO();
            $bus_info = $BusDAO->getbusbyId($id);
            include 'vue\updatebus.php';
        }
    }
    function update() {
        if(isset($_GET['submit'])) {
            $id = $_GET['submit'];
            $num_bus = $_GET['num_bus'];
            $capcty = $_GET['capcty'];
            $entreprise = $_GET['entreprise'];
            $busDAO = new BusDAO();
           
        $busDAO->update_the_bus($id,$num_bus,$capcty,$entreprise);
        include 'vue\updatebus.php';
      
        }
    }                                              
 
}


?>
