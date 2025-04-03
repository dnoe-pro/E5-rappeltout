<body style="background-color: antiquewhite;">
    <h2>Rechercher un matériel</h2>
    </hr>
    <form method="POST" action="index.php?action=retrieve_materiel">
        <fieldset>
            <legend>Rechercher un matériel par son identifiant:</legend>
            </br>
            <label for="valeur"> Identifiant: </label>
            <input type="text" autocomplete="off" id="valeur" name="valeur" required></br></br>
            <input type="submit" cursor="pointer" value="recherche" class="boutton"
                style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" />
            </br>
        </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($result != "error") {
            echo "</hr> </br><h2>Recherche correspondant au materiel</h2>
    <!--Affichage appareil-->
    <fieldset>
        <p>
            La référence recherché du matériel est : " . $materiel->getref_materiel() . "</br>
            Le materiel correspondant est : " . $materiel->getNomMat() . "</br>
        </p>
    </fieldset> </br> </br>";
        } else {
            echo "Aucune matériel trouvé <br> <br>";
        }
    } ?>

</body>
