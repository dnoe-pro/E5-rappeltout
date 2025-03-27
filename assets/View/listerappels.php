<?php 
require '../Controler/c-connex_db.php';
include '../Controler/liste.php';
//Tout les materiaux qui sont associés à un document et une date de rappel
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../style.css"/>
        <br><img src = "../img/na.png" alt = "photo na" width="120px" height="120px" />
    </head>
    <body style="background-color: antiquewhite;">
</br>
        <form method="POST" action="../Controler/listerappels.php" style="margin-left:35%">
        <h2>Listes des rappels </h2>
        <?php 
        if (!empty($resultat)) : //Affichage de la liste des rappels 
          foreach ($resultat as $result) : ?>
            
            <fieldset> 
            <legend><h1> <?php echo $result ['date_exp'] ?></legend> </h1>
             <?php echo $result['ref_materiel'] ?> </br>
             <?php echo $result['nom_materiel']?></br>
             </fieldset>
          </form>
          <?php endforeach; ?>
<?php else : ?>
  <div>Aucun rappels</div>
<?php endif; ?>
</br>  <a href="index.html" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);"> Retour </button></a>
</body>
</html>