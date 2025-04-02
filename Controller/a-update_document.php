<?php
$action = 'update_document';

require 'navigationBar.php';
require 'model/document.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["valeur"]) && isset($_POST["date_exp"])) {
        $valeur_doc = $_POST["valeur"];
        $valeur_datedoc = $_POST["date_exp"];

        $Document = new Document($valeur_datedoc, $valeur_doc);
        $Document->UpdateDocument();
    }
}