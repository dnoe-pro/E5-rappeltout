<?php
require 'navigationBar.php';
require 'Model/materiel.php';

if (isset($_POST['reference_materiel']) && isset($_POST['nom_materiel'])) {
    $ref_materiel = $_POST["reference_materiel"];
    $nom_mat = $_POST["nom_materiel"];

    $materiel = new Materiel($ref_materiel, $nom_mat);
    try { 
        $materiel->CreateMateriel();
    } catch (Exception $e) {
        echo "exectpion reçue :s". $e->getMessage() ."\n";
    }
    echo '<META HTTP-EQUIV="refresh" content="0;URL=index.php?action=create_rappel">';
    // header("location:index.php?action=create_rappel");
}
?>
