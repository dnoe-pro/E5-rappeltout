<html>
    <head>
        <title>Connexion</title>
        <br><img src="Assets/img/na.png" alt="photo na" width="120px" height="120px" />
    </head>

    <body style="background-color: antiquewhite;">
        <br />
        <form action="index.php?action=connexion" class="form_admin" method="POST" id="formconnex">
            <fieldset>
                <legend>
                    <h2>Connexion</h2>
                </legend>
                <label for="nom_utilisateur">Identifiant :</br></label>
                <input type="text" placeholder="Login" autocomplete="off" id="nom_utilisateur" value="moreau" name="nom_utilisateur"
                    required>
                </br></br>
                <label for="mdp_utlisateur">Mot de passe :</br></label>
                <input type="password" placeholder="Password" autocomplete="off" id="mdp_utilisateur" value="test" name="mdp_utilisateur"
                    required>
                </br></br>
                <input type="submit" class="submit" value="Connexion" /></br></br>
            </fieldset>
        </form>
        <br /><br /><br />
        <a href="index.php?action=accueil"><button
                style="color:rgb(194, 2, 46);background-color:#ffffff; text-align:center; padding:15px; width:200px; border-color: rgb(37, 153, 255); cursor: pointer;">
                Retour </button></a>
    </body>
</html>