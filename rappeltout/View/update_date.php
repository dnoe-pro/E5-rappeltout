<?php
require '../Controler/verif_session.php';//vérifie la connexion 
?>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Controler/style.css"/>
    <title>Modifier date document</title>
    <br><img src = "../Controler/img/na.png" alt = "photo na" width="120px" height="120px" />
</head>
<body style="background-color: antiquewhite;">
    <h2>Modifier la date du document sur la maintenance prévu</h2>
</hr> 
<form method="POST" action="../Controler/updatedoc.php">
    
<fieldset>
    <legend>Saisissez le numéro du materiel à modifier  :</legend>
    </br>
    <label for="valeur"> Id : </label>
    <input type="text" id="valeur" name="valeur" required>
    </fieldset>

    <fieldset>
    <legend> Nouvelle date de maintenance</legend>
    <label for="date_exp">Date de maintenance :</label>
    <input type="date" id="date_exp" name="date_exp" required>
    <br><br>
    <input type="submit" cursor="pointer" value="Mise à jour" <button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"/> </br></br>
    </fieldset>
    <!--<fieldset>
    <legend>Rechercher un matériel par son identifiant:</legend>
    </br>
    <label for="valeur"> Identifiant: </label>
    <input type="text"  autocomplete="off" id="valeur" name="valeur" required></br></br>
    <input type="submit" cursor="pointer" value="recherche" <button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"/> </br></br>
    </button>
    </fieldset>-->
</br>
</form>
    <a href="../View/admin.php" ><button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Retour </button></a>
</body>
</html>