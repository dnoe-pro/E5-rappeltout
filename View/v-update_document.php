<html>
    <body style="background-color: antiquewhite;">
        <h2>Modifier la date du document sur la maintenance prévu</h2>
        </hr>
        <form method="POST" action="index.php?action=update_document">
            <fieldset>
                <legend>Saisissez le numéro du materiel à modifier :</legend>
                </br>
                <label for="valeur"> Id : </label>
                <input type="text" id="valeur" name="valeur" required>
            </fieldset>

            <fieldset>
                <legend> Nouvelle date de maintenance</legend>
                <label for="date_exp">Date de maintenance :</label>
                <input type="date" id="date_exp" name="date_exp" required>
                <br><br>
                <input type="submit" cursor="pointer" value="Mise à jour" class="boutton"
                    style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" />
                </br></br>
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
        <a href="index.php?action=admin"><button class="boutton"
                style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);">
                Retour </button></a>
    </body>
</html>