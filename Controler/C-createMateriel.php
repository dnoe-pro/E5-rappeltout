<?php
require '../Model/cmateriel.php';
require '../Controler/c-connex_db.php';

$ref_materiel = $_POST["reference_materiel"];
$nom_mat = $_POST["nom_materiel"];
print_r($_POST);
$materiel = new Materiel($ref_materiel,$nom_mat);
$materiel->connex($connexion);
$materiel->CreateMateriel();

header("location:../View/create.php");
?>