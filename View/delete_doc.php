<?php
require '../Controller/verif_session.php';//bloque l'accès par l'url
require '../Controller/connex_db.php';// appel de la connexion bdd
require '../Controller/liste.php'//requête retrieve  

//Supprimer un équipement avec son ou ses documents correspondant
?>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Controller/style.css"/>
    <title>Suppression d'un document appartenant à un équipement</title>
    <br><img src = "Assets/Assets/img/na.png" alt = "photo na" width="120px" height="120px" />
</head>
<body style="background-color: antiquewhite;">
<form method="POST" action="../Controller/deletedoc.php">
    <fieldset>
    <legend>Supprimer un équipement ( matériel )</legend>
    </br>
   <label for="valeur">Numero de l'équipement :</br></label>
   <input type="text" id="valeur" name="valeur" required>
   <br><br>
<input type="submit" cursor="pointer" value="Supprimer" <button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"/> </br></br></button>
    </fieldset>
</br>
</form>
    <a href="../View/admin.php" ><button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Retour </button></a>
</body>
</html>