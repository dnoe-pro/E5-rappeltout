<?php
require '../Model/cdocument.php';
require '../Model/connex_db.php';
require 'verif_session.php';

$valeur_doc = $_POST["valeur"];

print_r($_POST);

$Document = new Document("","","");
$Document->connex($connexion);
$Document->DeleteDocument($valeur_doc);

header("location:../View/delete_doc.php");