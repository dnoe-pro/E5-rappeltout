<?php
$action = 'create_utilisateur';

require 'headerBar.php';
require 'model/utilisateur.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nom_utilisateur"]) && isset($_POST["mdp_utilisateur"])) {
        $nom_utilisateur = $_POST["nom_utilisateur"];
        $mdp_utilisateur = $_POST["mdp_utilisateur"];
        $utilisateur = new Utilisateur($nom_utilisateur, $mdp_utilisateur);
        $utilisateur->register();
    }
}
?>