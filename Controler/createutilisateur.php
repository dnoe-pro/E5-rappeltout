<?php
require '../Model/cutilisateur.php';
require '../Controler/c-connex_db.php';

$nom_utilisateur = $_POST["nom_utilisateur"];
$mdp_utilisateur = $_POST["mdp_utilisateur"];
$passhash = password_hash($mdp_utilisateur, PASSWORD_DEFAULT);
//print_r($mdp_utilisateur);
$utilisateur = new Utilisateur($nom_utilisateur,$passhash);
$utilisateur->connex($connexion);
$utilisateur->CreateUtilisateur();

header("location:../View/createutilisateur.php");
?>