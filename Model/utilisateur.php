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
}
?>