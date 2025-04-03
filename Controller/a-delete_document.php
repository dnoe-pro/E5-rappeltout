<?php
$action="delete_document";
require 'navigationBar.php';
require 'Model/document.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["valeur"])){
        $valeur_doc = $_POST["valeur"];
        print_r($_POST);
        $Document = new Document("", "", "");
        $Document->connex($connexion);
        $Document->DeleteDocument($valeur_doc);
    }
}
?>


