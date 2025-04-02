<?php
$etat = "connexion";

session_start();
require "Model/connex_db.php";  
if (isset($_POST["nom_utilisateur"]) && isset($_POST["mdp_utilisateur"]) ){
    $nom_utilisateur=$_POST["nom_utilisateur"];
    $mdp_utilisateur=$_POST["mdp_utilisateur"];


    $stmt=$connexion->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur =:nom_utilisateur");
    $stmt->bindParam(':nom_utilisateur', $nom_utilisateur);
    $stmt->execute();
    $donnee=$stmt->fetch();
    if ($donnee==null){ 
        header("index.php?action=connexion");
    }
    else{
        if(password_verify( $mdp_utilisateur, $donnee["mdp_utilisateur"])){
            $_SESSION["nom_utilisateur"]=$donnee["nom_utilisateur"];
            $_SESSION["id_utilisateur"]=$donnee["id_utilisateur"];
            header("index.php?action=admin");
        }else{
            header("index.php?action=connexion");
        }
    }
}
?>