<?php
require '../Model/cmateriel.php';
require '../Model/connex_db.php';
require 'verif_session.php';

$valeur_mat = $_POST["valeur"];

$Materiel = new Materiel("","","","");
$Materiel->connex($connexion);
$Materiel->connex($valeur_mat);

header("location:../View/delete_mat.php");