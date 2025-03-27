<?php
require '../Controler/verif_session.php';//vérifie la connexion 
?>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../style.css"/>
    <title>Modifier nom materiel</title>
    <br><img src = "../img/na.png" alt = "photo na" width="120px" height="120px" />
</head>
<body style="background-color: antiquewhite;">
    <h2>Modifier le nom du materiel</h2>
</hr> 
<form method="POST" action="../Controler/updatemat.php">
    
<fieldset>
    <legend>Saisissez le numéro du materiel à modifier  :</legend>
    </br>
    <label for="valeur"> Id : </label>
    <input type="text" id="valeur" name="valeur" required>
    </fieldset>

    <fieldset>
    <legend> Nouveau nom pour le matériel</legend>
    <label for="nom_materiel">Nom du materiel :</label>
    <input type="text" id="nom_materiel" name="nom_materiel" required>
    <br><br>
    <input type="submit" cursor="pointer" value="Mise à jour" <button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"/> </br></br>
    </fieldset>
</br>
</form>
    <a href="../View/admin.php" ><button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Retour </button></a>
</body>
</html>