<?php
$action = "create_document";

require 'model/document.php';

if (isset($_POST['date_exp']) && isset($_POST['ref_materiel'])) {
    $date_exp = $_POST["date_exp"];
    $ref_materiel = $_POST["ref_materiel"];
    $doc = new Document($date_exp, $ref_materiel);
    try {
        $doc->CreateDocument();
    } catch (Exception $e) {
        echo 'Exception reçue : ', $e->getMessage(), "\n";
    }
    echo '<META HTTP-EQUIV="refresh" content="0;URL=index.php?action=create_rappel">';
}
?>