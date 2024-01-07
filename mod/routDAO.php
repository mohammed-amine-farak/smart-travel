<?php
require_once 'mod\connexion.php';
require_once 'rout.php';

class routeDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
     function getRout(){
        $select = "SELECT * from route";
        $stmt = $this->db->query($select);
        $stmt->execute();
        $routeData = $stmt->fetchAll();
        $routes = array();

        foreach ($routeData as $R) {
            // $id,$distance,$durée,$ville_de_départ,$ville_de_destination
            $routes[] = new route($R["id"],$R["dist"],$R["duree"],$R["vil_dep"],$R["vil_arv"]);

        }

        return $routes;
    }
    function get_rout_by_id($id){
        $select = "SELECT * from route where id = $id";
        $stmt = $this->db->query($select);           
        $stmt -> execute();
        $R = $stmt->fetch();
        $route = new route($R["id"],$R["dist"],$R["duree"],$R["vil_dep"],$R["vil_arv"]);
        return $route;

    }
    function update_route($id,$distance,$durée,$ville_de_départ,$ville_de_destination){
         $query = $this->db->prepare("UPDATE route SET   dist = $distance, duree ='$durée', vil_arv ='$ville_de_destination', vil_dep = '$ville_de_départ' WHERE id = $id");
         $query->execute();
        header('Location:adminroute.php');
    }
    function add_route($distance,$durée,$ville_de_départ,$ville_de_destination){
         $query = $this->db->prepare("INSERT INTO route (dist, duree, vil_arv, vil_dep) VALUES ( $distance, '$durée', '$ville_de_départ', '$ville_de_destination')");
         $query->execute();
         header('Location:adminroute.php');
    }

}
?>