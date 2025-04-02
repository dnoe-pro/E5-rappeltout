<?php
$action = 'retrieve_materiel';

require 'Model/materiel.php';
require 'navigationBar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["valeur"])) {
        $valeur_mat = $_POST["valeur"];
        $materiel = new Materiel("", "");
        $result = $materiel->RetrieveMateriel($valeur_mat);
    }
}
?>