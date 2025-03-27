<?php
require '../Model/cmateriel.php';
require '../Controler/connex_db.php';
require 'verif_session.php';

$valeur_mat = $_POST["valeur"];
$nom_materiel = $_POST["nom_materiel"];

print_r($_POST); 

$Materiel = new Materiel($valeur_mat,$nom_materiel);
$Materiel->connex($connexion);
$Materiel->UpdateMateriel();

//header("location:../View/update_materiel.php");