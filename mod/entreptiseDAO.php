<?php

require_once 'mod/connexion.php';
require_once 'mod/entreprise.php';

class EntrepriseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getEntreprises() {
        try {
            $query = "SELECT * FROM entreprise";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $entrepriseData = $stmt->fetchAll();
            $entreprises = array();

            foreach ($entrepriseData as $E) {
                $entreprises[] = new Entreprise($E["nomEn"], $E["img"]);
            }

            return $entreprises;
        } catch (PDOException $e) {
            // Handle the exception, log it, or display an error message
            echo "Error: " . $e->getMessage();
            return array(); // Return an empty array or handle the error accordingly
        }
    }
}
?>
