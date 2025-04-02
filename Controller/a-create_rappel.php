<?php
$action = 'create_rappel';

require 'Model/materiel.php';
require 'navigationBar.php';

$materiel = new Materiel('', '');
$listMateriel = $materiel->FindAllMatWithoutDoc();
?>