<?php
//require_once('../Controler/connex_db.php');

class Document {

    //attributs
    private $num_doc;
    private $date_exp;
    private $ref_materiel;
    private $connex;
    //Constructeur 
    function __construct($date_expiration,$reference_materiel){
        //$this->num_doc=$numero_doc;
        $this->date_exp=$date_expiration;
        $this->ref_materiel=$reference_materiel;
        
    }
    //accesseurs
    public function getRefMat() {
        return $this->$numero_doc;
    }
    public function setRefMat($numero_doc) {
        $this->num_doc = $numero_doc;
    }
    public function getDate_exp() {
        return $this->$date_expiration;
    }
    public function setDate_exp($date_expiration) {
        $this->date_exp = $date_expiration;
    }
    public function getref_materiel() {
        return $this->$reference_materiel;
    }
    public function setref_materiel($reference_materiel) {
        $this->ref_materiel = $reference_materiel;
    }// fonction de connexion à la bdd
    function connex($connexion){
        $this->connex=$connexion;
    }

    public function CreateDocument() {
        $req='INSERT INTO document VALUE ("", :date_exp, :ref_materiel);';
        $stmt = $this->connex->prepare($req);
        $stmt->bindParam(':date_exp', $this->date_exp, PDO::PARAM_STR);
        $stmt->bindParam(':ref_materiel', $this->ref_materiel, PDO::PARAM_STR);
        $stmt->execute();  
    }
    public function UpdateDocument() {
        $req = "UPDATE document SET date_exp = :date_exp  WHERE ref_materiel = :valeur;";
        $stmt = $this->connex->prepare($req);
        //$stmt->bindParam(':num_doc', $this->num_doc);
        $stmt->bindParam(':date_exp', $this->date_exp);
        $stmt->bindParam(':valeur', $this->ref_materiel);
        $stmt->execute();
    }
    public function DeleteDocument() {
        $req = "DELETE FROM document WHERE num_doc = :valeur;";
        $stmt = $this->connex->prepare($req);
        $stmt->bindParam(':valeur', $this->num_doc);
        $stmt->execute();
    }  
     
}
?>