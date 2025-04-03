<?php
$action = 'connexion';

include 'model/utilisateur.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nom_utilisateur"]) && isset($_POST["mdp_utilisateur"])) {
        $utilisateur = new Utilisateur($_POST["nom_utilisateur"], $_POST["mdp_utilisateur"]);
        $result = $utilisateur->login();
        if ($result == 'success') {
            $_SESSION["nom_utilisateur"] = $_POST["nom_utilisateur"];
            $_SESSION["id_utilisateur"] = $_POST["mdp_utilisateur"];
            // header("location : index.php?action=admin");
            echo '<META HTTP-EQUIV="refresh" content="0;URL=index.php?action=admin">';
        }
    }
}
?>