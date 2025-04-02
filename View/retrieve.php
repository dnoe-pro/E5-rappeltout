<?php
require '../Controller/verif_session.php';//vérifie la connexion 
?>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <title>Creation de documents pour un materiel</title>
    <br><img src = "../assets/img/na.png" alt = "photo na" width="120px" height="120px" />
</head>
<body style="background-color: antiquewhite;">
    <h2>Créer un document</h2>
</hr> 
<form method="POST" action="../Controller/retrievemat.php">
    
    <fieldset>
    <legend>Rechercher un matériel par son identifiant:</legend>
    </br>
    <label for="valeur"> Identifiant: </label>
    <input type="text"  autocomplete="off" id="valeur" name="valeur" required></br></br>
    <input type="submit" cursor="pointer" value="recherche" <button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"/> </br></br>
    </button>
    </fieldset>
</br>
</form>
    <a href="../View/admin.php" ><button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Retour </button></a>
</body>
</html>