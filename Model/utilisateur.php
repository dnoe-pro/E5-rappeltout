<?php

class Utilisateur
{

    //attributs
    private $id_utilisateur;
    private $nom_utilisateur;
    private $mdp_utilisateur;

    //Constructeur 
    public function __construct($nom_utilisateur, $mdp_utilisateur, $id_utilisateur = null)
    {
        if ($id_utilisateur != null) {
            $this->id_utilisateur = $id_utilisateur;
        }
        $this->nom_utilisateur = $nom_utilisateur;
        $this->mdp_utilisateur = $mdp_utilisateur;
    }

    //accesseurs get/set de l'id
    public function getIdUser()
    {
        return $this->id_utilisateur;
    }
    public function setIdUser($id_user)
    {
        $this->id_utilisateur = $id_user;
    }
    //get / set de nom
    public function getNomUser()
    {
        return $this->nom_utilisateur;
    }
    public function setNomUser($nom_user)
    {
        $this->nom_utilisateur = $nom_user;
    }
    //get / set de mot de passe 
    public function getMdpUser()
    {
        return $this->mdp_utilisateur;
    }
    public function setMdpUser($mdp_user)
    {
        $this->mdp_utilisateur = $mdp_user;
    }

    // fonction de connexion à la bdd
    public function login()
    {
        include 'connex_db.php';
        $stmt = $connexion->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur =:nom_utilisateur");
        $stmt->bindParam(':nom_utilisateur', $this->nom_utilisateur);
        $stmt->execute();
        $utilisateur = $stmt->fetch();
        if ($utilisateur == null) {
            return 'failure';
        } else {
            if (password_verify($this->mdp_utilisateur, $utilisateur["mdp_utilisateur"])) {
                return 'success';
            } else {
                return 'failure';
            }
        }
    }

    public function register()
    {
        include 'connex_db.php';
        $mdp_utilisateur = password_hash($this->mdp_utilisateur, PASSWORD_DEFAULT);
        $stmt = $connexion->prepare('INSERT INTO utilisateur(nom_utilisateur, mdp_utilisateur) VALUES (:nom_utilisateur, :mdp_utilisateur);');
        $stmt->bindParam(':nom_utilisateur', $this->nom_utilisateur, PDO::PARAM_STR);
        $stmt->bindParam(':mdp_utilisateur', $mdp_utilisateur);
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