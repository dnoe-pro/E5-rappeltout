<?php

if (!isset($_SESSION["nom_utilisateur"])) {
        if (isset($_GET['action'])) {
                $etat = $_GET['action'];
        }
        else {
                $etat = "accueil";
        }
} else {
        if (isset($_GET['action'])) {
                $etat = $_GET['action'];
        }
        else {
                $etat = "admin";
        }
}
// Script action et vue
$scriptAction = 'Controller/a-' . $etat . '.php';
include $scriptAction;
$scriptVue = 'View/v-' . $etat . '.php';
include $scriptVue;
?>



