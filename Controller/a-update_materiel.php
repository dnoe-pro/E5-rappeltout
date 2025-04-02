<?php
$action = 'update_materiel';

require 'Model/materiel.php';
require 'headerBar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["valeur"]) && isset($_POST["nom_materiel"])) {
        $valeur_mat = $_POST["valeur"];
        $nom_materiel = $_POST["nom_materiel"];

        $Materiel = new Materiel($valeur_mat, $nom_materiel);
        $Materiel->UpdateMateriel();
    }
}