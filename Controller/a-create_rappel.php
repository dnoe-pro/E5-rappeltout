<?php
$action = 'create_rappel';

require 'Model/materiel.php';
require 'headerBar.php';

$materiel = new Materiel('', '');
$listMateriel = $materiel->FindAllMatWithoutDoc();
?>