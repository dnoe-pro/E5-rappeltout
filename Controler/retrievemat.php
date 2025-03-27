<?php
require '../Model/cmateriel.php';
require '../Model/connex_db.php';
require 'verif_session.php';

$valeur_mat = $_POST["valeur"];

$Materiel = new Materiel("","","","");
$Materiel->connex($connexion);
$Materiel->RetrieveMateriel($valeur_mat);
$ref_materiel=$Materiel->getref_materiel();
$nom_materiel=$Materiel->getNomMat();

?>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <title>Creation de documents pour un materiel</title>
    <br><img src = "../assets/img/na.png" alt = "photo na" width="120px" height="120px" />
</head>
<body background-color>
<h2>Recherche correspondant au materiel</h2>
<hr/>  
    <!--Affichage appareil-->
    <fieldset>
        <p>
            La référence recherché du matériel est : <?php echo $ref_materiel;?></br>
            Le materiel correspondant est : <?php echo $nom_materiel;?></br>
        </p>
    </fieldset>
    </br>
    <a href="../View/retrieve.php" ><button style="color:rgb(194, 2, 46);background-color:#ffffff; text-align:center; padding:15px; width:200px; border-color: rgb(37, 153, 255); cursor: pointer;"> Retour </button></a>
</body>