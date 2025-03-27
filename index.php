
<?php
$etat = "index";
//L'utilisateur n'est pas connecter => envoie vers le formulaire de connexion
if (!isset($_SESSION["nom_utilisateur"])) {
    if (isset($_GET['action'])) {
        if ($_GET["action"] == "listerappels") {
            $etat = "listerappels";
        }
        if ($_GET["action"] == "connexion") {
            $etat = "connexion";
        }
    } else {
        $etat = "index";
    }

}
//utilisateur connecter
else {
    if (isset($_GET['action'])) {
        $etat = $_GET['action'];
    } else {
        $etat = 'admin';
    }
}
// Script action et vue
$scriptAction = $_SERVER["DOCUMENT_ROOT"] . '/Controller/a-' . $etat . '.php';
include $scriptAction;
$scriptVue = $_SERVER["DOCUMENT_ROOT"] . '/View/v-' . $etat . '.php';
include $scriptVue;

// index.php?action=""
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Accueil</title>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <br><img src = "assets/img/na.png" alt = "photo na" width="120px" height="120px" />
    </head>
    <body style="background-color: antiquewhite;">
        <h1>Bienvenue sur le projet rappeltout</h1>
        <hr/>
        </br></br> <a href="View/listerappels.php" ><button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Liste des rappels </button></a>
        </br></br><a href="View/v-connexion.php" ><button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Se connecter </button></a>
    </body>
</html>




