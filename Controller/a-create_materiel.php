<?php
require 'headerBar.php';
require 'Model/materiel.php';

$ref_materiel = $_POST["reference_materiel"];
$nom_mat = $_POST["nom_materiel"];

$materiel = new Materiel($ref_materiel, $nom_mat);
$materiel->CreateMateriel();

header("location:index.php?action=create_rappel");
?>