<?php
require '../Model/cmateriel.php';
require '../Controler/c-connex_db.php';
require 'verif_session.php';

$valeur_mat = $_POST["valeur"];

$Materiel = new Materiel("","","","");
$Materiel->connex($connexion);
$Materiel->($valeur_mat);

header("location:../View/delete_mat.php");