<?php
include 'mod/connexion.php';
include 'horaire.php';

class horaireDAO{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    
   
    function get_horaire(){
      
            $select = "SELECT * from horaire";
            $stmt = $this->db->query($select);
            $stmt->execute();
            $horaireData = $stmt->fetchAll();
            $horaire = array();
    
            foreach ($horaireData as $H) {
                // `id_hor`, `heure_dep`, `heure_arri`, `sieg_dispo`, `date_`, `fk_bus`, `fk_route` FROM `horaire`
                $horaire[] = new horaire($H['id_hor'],$H['heure_dep'],$H['heure_arri'],$H['sieg_dispo'],$H['date_'],$H['fk_bus'],$H['fk_route']);
           }
    return $horaire;
        }
    
}
    
?>