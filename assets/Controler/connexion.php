<?php
session_start();
require "../Controler/connex_db.php";
$nom_utilisateur=$_POST["nom_utilisateur"];
$mdp_utilisateur=$_POST["mdp_utilisateur"];

$stmt=$connexion->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur =:nom_utilisateur");
$stmt->bindParam(':nom_utilisateur', $nom_utilisateur);
$stmt->execute();
$donnee=$stmt->fetch();
if ($donnee==null){ 
header("location:../View/connexion.html");
}
else{
    if(password_verify( $mdp_utilisateur, $donnee["mdp_utilisateur"])){
        $_SESSION["nom_utilisateur"]=$donnee["nom_utilisateur"];
        $_SESSION["id_utilisateur"]=$donnee["id_utilisateur"];
        header("location:../View/admin.php");
    }else{
        header("location:../View/connexion.html");
    }
}
?>