<body style="background-color: antiquewhite;">
    <h2>Création document(s) / materiel(s)</h2>
    </hr>
    <!--Création d'un document-->
    <form method="post" action="index.php?action=create_document">
        <fieldset>
            <legend>Créer un document</legend>
            <label for="date_exp">Date du rappel :</label>
            <input type="date" id="date_exp" name="date_exp" required>
            </br></br>
            <!--Liste dans un tableau de la requête d'affichage des materiaux ne possédant pas de documents-->
            <label for="ref_materiel">Numero du materiel :</br></label>
            <select id="ref_materiel" name="ref_materiel">
                <option value="">*No Materiel*</option>
                <?php
                if (!empty($listMateriel)): //Affichage de la liste des rappels 
                    foreach ($listMateriel as $materiel): ?>
                        <option value="<?php echo $materiel->getref_materiel(); ?>"><?php echo $materiel->getNomMat(); ?>
                        </option>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div>Aucun document sur les materiaux , vous êtes à jour !</div>
                <?php endif; ?>
                </br>
            </select>
            </br>
            <input type="submit" class="btn btn-primary" value="Créer" /></br>
        </fieldset>
    </form>

    </br>
    <!--Formulaire de création d'un matériel-->
    <form method="post" action="index.php?action=create_materiel">
        <fieldset>
            <legend>Renseigner un materiel</legend>
            <label for="reference_materiel">Numero du materiel :</br><em>*Identification du matériel</em></label>
            <input type="text" autocomplete="off" id="reference_materiel" name="reference_materiel" required>
            </br></br>
            <label for="nom_mat">Nom du materiel :</br></label>
            <input type="text" autocomplete="off" id="nom_materiel" name="nom_materiel" required>
            </br>
            <input type="submit" class="btn btn-primary" value="Créer" /></br>
        </fieldset>
    </form>
</body>
