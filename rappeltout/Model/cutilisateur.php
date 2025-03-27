<?php

class Utilisateur {

    //attributs
    private $id_utilisateur;
    private $nom_utilisateur;
    private $mdp_utilisateur;
    //Constructeur 
    function __construct($nom_user,$mdp_user){
        $this->nom_utilisateur=$nom_user;
        $this->mdp_utilisateur=$mdp_user;
    }
    //accesseurs get/set de l'id
    public function getiduser() {
        return $this->$id_utilisateur;
    }
    public function setiduser($id_user) {
        $this->$id_utilisateur = $id_user;
    }
    //get / set de nom
    public function getnomuser() {
        return $this->$nom_user;
    }
    public function setnomuser($nom_user) {
        $this->nom_utilisateur = $nom_user;
    }
    //get / set de mot de passe 
    public function getmdpuser() {
        return $this->$mdp_user;
    }
    public function setmdpuser($mdp_user) {
        $this->mdp_utilisateur = $mdp_user;
    }// fonction de connexion à la bdd
    function connex($connexion){
        $this->connex=$connexion;
    }

    public function CreateUtilisateur() {
        $stmt = $this->connex->prepare('INSERT INTO utilisateur  VALUE ("",:nom_utilisateur, :mdp_utilisateur);');
        $stmt->bindParam(':nom_utilisateur', $this->nom_utilisateur, PDO::PARAM_STR);
        $stmt->bindParam(':mdp_utilisateur', $this->mdp_utilisateur);
        $stmt->execute();   
    }

    /*public function RetrieveUtilisateur($numero_doc, $date_expiration, $reference_materiel) {
        $req = "SELECT * FROM materiel WHERE VALUE (num_doc, :date_expiration, :ref_materiel);";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam('num_doc', $this->$numero_doc);
        $stmt->bindParam(':date_expiration', $this->$date_expiration);
        $stmt->bindParam(':ref_materiel', $this->$reference_materiel);
        $stmt->execute();
        $resultat = $stmt->fetchAll();
        $Document = $this->num_doc = $resultat['$num_doc'];
        $Document = $this->numero_doc = $resultat['date_expiration'];
        $Document = $this->numero_doc = $resultat['ref_materiel'];
    }
    public function UpDateDocument() {
        $req = "UPDATE materiel SET 'num_doc'='[:num_doc]', 'date_expiration'='[:date_expiration]', 'ref_materiel'='[:ref_materiel]';";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':num_doc', $this->$numero_doc);
        $stmt->bindParam(':date_expiration', $this->$date_expiration);
        $stmt->bindParam(':ref_materiel', $this->$reference_materiel);
        $stmt->execute();
    }

    public function DeleteDocument() {
        $req = "DELETE FROM materiel WHERE VALUE (:num_doc, :date_expiration, :ref_materiel);";
        $stmt = $connexion->prepare($req);
        $stmt->bindParam(':num_doc', $this->$numero_doc);
        $stmt->bindParam(':date_expiration', $this->$date_expiration);
        $stmt->bindParam(':ref_materiel', $this->$reference_materiel);
        $stmt->execute();
    }  */  
}
?>