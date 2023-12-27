<?php

require_once 'Model\connexion.php';
require_once 'Model\bus.php';
class BookDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_bus(){
        $query = "SELECT * FROM bus";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $Busdata = $stmt->fetchAll();
        $bus = array();
        foreach ($busData as $B) {
        $bus[] = new bus($B["immat"],$B["num_bus"],$B["capacité"], $B["fk_idEn"]);
        }
        return $Books;

    }
   
    public function update_bus($bus){
        $query = "UPDATE `bus` SET `immat`='".$bus->getgetImmat()."',`num_bus`='".$bus->getNum_bus()."' where `ISBN`='".$bus->getCapacité()."'";
        // echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    function getbusByID($id) {
        $query = "SELECT * FROM bus where ISBN = $id";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $B = $stmt->fetch();
     
        $bus[] = new bus($B["mmat"],$B["num_bus"],$B["capacité"], $B["fk_idEn"]);
        
        return $bus;
          
    }



}

?>

