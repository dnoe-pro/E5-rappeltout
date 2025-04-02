<html>


<body style="background-color: antiquewhite;">
    <h2>Créer un Utilisateur</h2>
    </hr> <!--formulaire de création d'admin-->
    <form method="post" action="index.php?action=create_utilisateur">
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
    <a href="index.php?action=admin"><button class="boutton"
            style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);">
            Retour </button></a>
</body>

</html>