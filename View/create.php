<?php
include '../Controler/verif_session.php';//bloque l'accès par l'url
require '../Controler/c-connex_db.php';// appel de la connexion bdd
require '../Controler/listmatsansdoc.php';
//requête sql projetant les materiaux n'ayant pas de documents attitré
?>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <title>Creation de documents pour un materiel ou de matériels</title>
    <br><img src = "../assets/img/na.png" alt = "photo na" width="120px" height="120px" />
</head>
<body style="background-color: antiquewhite;">
    <h2>Création document(s) / materiel(s)</h2>
</hr>  
<!--Création d'un document-->  
<form method="post" action="../Controler/c-createdocument.php">
    <fieldset >
        <legend>Créer un document</legend>
        <label for="date_exp">Date du rappel :</label>
        <input type="date" id="date_exp" name="date_exp" required>
    </br></br>
    <!--Liste dans un tableau de la requête d'affichage des materiaux ne possédant pas de documents-->
    <label for="ref_materiel">Numero du materiel :</br></label>
        <select id="ref_materiel" name="ref_materiel">
            <option value="">*No Materiel*</option>
            <?php 
            if (!empty($doc)) : //Affichage de la liste des rappels 
                foreach ($doc as $docs) : ?>
                    <option value="<?php echo $docs["ref_materiel"];?>"><?php echo $docs["nom_materiel"];?></option>
                <?php endforeach; ?>
            <?php else : ?>
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
<form method="post" action="../Controler/createmateriel.php">
    <fieldset>
        <legend>Renseigner un materiel</legend>
        <label for="reference_materiel">Numero du materiel :</br><em>*Identification du matériel</em></label>
        <input type="text" autocomplete="off" id="reference_materiel" name="reference_materiel" required>
    </br></br>
        <label for="nom_mat">Nom du materiel :</br></label>
        <input type="text" autocomplete="off"id="nom_materiel" name="nom_materiel" required>
</br>
    <input type="submit" class="btn btn-primary" value="Créer" /></br>
    </fieldset>
</form>

</br>  <a href="../View/admin.php" ><button style="color:rgb(194, 2, 46);background-color:#ffffff; text-align:center; padding:15px; width:200px; border-color: rgb(37, 153, 255); cursor: pointer;"> Retour </button></a>

</br></br>
</body>
</html>