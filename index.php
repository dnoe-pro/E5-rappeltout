<?php
$etat = "index";
if (isset($_GET['action'])) {
        $etat = $_GET['action'];
    }
else {
        $etat = "accueil";
}
// Script action et vue
$scriptAction = 'Controller/a-' . $etat . '.php';
include $scriptAction;
$scriptVue = 'View/v-' . $etat . '.php';
include $scriptVue;
?>



