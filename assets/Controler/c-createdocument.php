<?php
require '../Model/cdocument.php';
require '../Controler/c-connex_db.php';

$date_exp = $_POST["date_exp"];
$ref_materiel = $_POST["ref_materiel"];
print_r($_POST);
$doc = new Document($date_exp,$ref_materiel);
$doc->connex($connexion);
try{
    $doc->CreateDocument();
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

header("location:../View/create.php");

?>