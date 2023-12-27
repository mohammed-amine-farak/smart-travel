<?php


require_once 'Model\connexion.php';
require_once 'Model\bus.php';
class BookDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_entreprise(){
        $query = "SELECT * FROM entreprise";
        $stmt = $this->db->query($query)
        $stmt -> execute();
        $entrepriseData = $stmt->fetchAll();
        $entreprise = array();
        foreach ($entrepriseData as $E) {
        $entreprise[] = new bus($E["id"],$E["nomEn"],$E["img"]);
        }
        return $entreprise;

    }
}
?>