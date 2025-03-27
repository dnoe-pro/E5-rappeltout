<?php
require '../Model/cdocument.php';
require '../Controler/c-connex_db.php';
require 'verif_session.php';

$valeur_doc = $_POST["valeur"];
$valeur_datedoc = $_POST["date_exp"];

print_r($_POST); 

$Document = new Document($valeur_datedoc,$valeur_doc);
$Document->connex($connexion);
$Document->UpdateDocument();

header("location:../View/update_date.php");