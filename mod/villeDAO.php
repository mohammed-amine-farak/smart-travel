<?php

require_once 'connexion.php';
require_once 'ville.php';

class VilleDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getVilles() {
        $query = "SELECT nom_ville FROM ville";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $villeData = $stmt->fetchAll();
        $villes = array();

        foreach ($villeData as $d) {
            $villes[] = new Ville($d["nom_ville"]);
        }

        return $villes;
    }
}
?>
