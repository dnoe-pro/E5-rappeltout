<?php
require '../Controller/verif_session.php';
?>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <title>Creation d'utilisateurs</title>
    <br><img src = "../assets/img/na.png" alt = "photo na" width="120px" height="120px" />
</head>
<body style="background-color: antiquewhite;">
    <h2>Créer un Utilisateur</h2>
</hr> <!--formulaire de création d'admin-->    
<form method="post" action="../Controller/a-createutilisateur.php">
    <fieldset>
        <legend>Créer un utilisateur admin</legend>
        <label for="nom_utilisateur">Identifiant :</br></label>
        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
    </br></br>
        <label for="mdp_utilisateur">Mot de passe :</br></label>
        <input type="password" id="mdp_utilisateur" name="mdp_utilisateur" required>
</br>
        <!--envoi du formulaire-->
    <input type="submit" class="btn btn-primary" value="create" /></br></br>
    </fieldset>
</form>
<a href="../View/admin.php" ><button class="boutton" style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Retour </button></a>
</body>
</html>