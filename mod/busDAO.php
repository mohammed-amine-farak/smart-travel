<?php

require_once 'mod\connexion.php';
require_once 'mod\bus.php';

class BusDAO {
    private $db;
      
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function createBus($bus) {
            
            $stmt = $this->db->prepare("INSERT INTO bus(immat, num_bus, capacité, fk_idEn) VALUES (?, ?, ?, ?)");
            $stmt->execute([$bus->getImmat(), $bus->getNum_bus(), $bus->getCapacité(), $bus->getEntreprise()]);
            
    }
    public function getbus(){
        $query = "SELECT * FROM bus";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $busData = $stmt->fetchAll();
        $Bus = array();
          //SELECT `immat`, `num_bus`, `capacité`, `fk_idEn`
        foreach ($busData as $E) {
            $Bus[] = new bus($E["immat"], $E["num_bus"],$E["capacité"], $E["fk_idEn"]);
        }
        return $Bus;
    }
    function getbusbyId($ID) {
        $query = "SELECT * FROM bus where immat = '$ID'";
        $stmt = $this->db->query($query);           
        $stmt -> execute();
        $B = $stmt->fetch();
        $Book = new bus($B['immat'],$B['num_bus'],$B['capacité'],$B['fk_idEn']);
        return $Book;
          
    }
    public function update_the_bus($id,$num_bus,$capacité,$entreprise) {
        $updateBusStatement = $this->db->prepare("UPDATE bus SET num_bus = $num_bus,capacité = $capacité,fk_idEn = '$entreprise' WHERE immat = '$id'");
        $updateBusStatement->execute();
        header('Location:adminbus.php');
       
    }
    }
?>
