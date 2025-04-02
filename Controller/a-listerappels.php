<?php
$action = 'listerappels';

require 'Model/connex_db.php';
//Tout les materiaux qui sont associés à un document et une date de rappel

$sql='SELECT * FROM materiel,document
where materiel.ref_materiel = document.ref_materiel
order by date_exp desc limit 0,10;';
$reponse = $connexion->query($sql);
$resultat=$reponse->fetchAll(PDO::FETCH_ASSOC);
?>


