<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Assets/css/style.css" />
</head>
<?php
session_start();
// Super controleur
if (!isset($_SESSION["nom_utilisateur"])) {
    isset($_GET['action']) ? $action = basename($_GET['action']) : $action = 'accueil';
} else {
    isset($_GET['action']) ? $action = basename($_GET['action']) : $action = 'admin';
}

$scriptAction = 'Controller/a-' . $action . '.php';
include $scriptAction;

$scriptVue = 'view/v-' . $action . '.php';
include $scriptVue;
?>

