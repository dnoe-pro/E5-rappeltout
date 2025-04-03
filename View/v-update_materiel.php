<body style="background-color: antiquewhite;">
    <h2>Modifier le nom du materiel</h2>
    </hr>
    <form method="POST" action="index.php?action=update_materiel">

        <fieldset>
            <legend>Saisissez le numéro du materiel à modifier :</legend>
            </br>
            <label for="valeur"> Id : </label>
            <input type="text" id="valeur" name="valeur" required>
        </fieldset>

        <fieldset>
            <legend> Nouveau nom pour le matériel</legend>
            <label for="nom_materiel">Nom du materiel :</label>
            <input type="text" id="nom_materiel" name="nom_materiel" required>
            <br><br>
            <input type="submit" cursor="pointer" value="Mise à jour" class="boutton"
                style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" />
            </br></br>
        </fieldset>
        </br>
    </form>

</body>
