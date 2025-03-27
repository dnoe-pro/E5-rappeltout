<?php
//require('../Model/connex_db.php');

class Materiel {

    //Attributs
    private $ref_materiel;
    private $nom_materiel;

    //Constructeur
    function __construct($reference_materiel,$nom_mat){
        $this->ref_materiel=$reference_materiel;
        $this->nom_materiel=$nom_mat;
    }

    public function getref_materiel() {
        return $this->ref_materiel;
    }
    public function setref_materiel($reference_materiel) {
        $this->ref_materiel = $reference_materiel;
    }
    public function getNomMat() {
        return $this->nom_materiel;
    }
    public function setNomMat($nom_mat) {
        $this->nom_materiel = $nom_mat;
    }
    function connex($connexion){
        $this->connex=$connexion;
    }

    public function CreateMateriel() {
        $stmt = $this->connex->prepare('INSERT INTO materiel  VALUE (:ref_materiel, :nom_materiel);');
        $stmt->bindParam(':ref_materiel', $this->ref_materiel, PDO::PARAM_STR);
        $stmt->bindParam(':nom_materiel', $this->nom_materiel, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function RetrieveMateriel($valeur) {
        $stmt = $this->connex->prepare ("SELECT * FROM materiel WHERE ref_materiel = :valeur;");
        $stmt->bindParam(':valeur', $valeur, PDO::PARAM_INT);
        $stmt->execute();
        $resultatmat = $stmt->fetch();
        $this->ref_materiel = $resultatmat['ref_materiel'];
        $this->nom_materiel = $resultatmat['nom_materiel'];
    }
    public function UpdateMateriel() {
        $req = "UPDATE materiel SET nom_materiel = :nom_materiel  WHERE ref_materiel = :valeur;";
        $stmt = $this->connex->prepare($req);
        $stmt->bindParam(':valeur', $this->ref_materiel);
        $stmt->bindParam(':nom_materiel', $this->nom_materiel);
        $stmt->execute();
    }
    /*public function DeleteMateriel() {
        $req = "DELETE FROM materiel WHERE VALUE (:ref_materiel, :nom_materiel);";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':ref_materiel', $this->$reference_materiel);
        $stmt->bindParam(':nom_materiel', $this->$nom_mat);
        $stmt->execute();
    } */  
    public function Findall(){
        $stmt = $this->connex->prepare ("SELECT ref_materiel FROM materiel;");
        $stmt->bindParam(':ref_materiel', $this->ref_materiel);
        $stmt->execute();
    } 
}
?>