<?php
include '../Controler/verif_session.php';//fichier contenant l'accès par url redirigé
require '../Model/connex_db.php';//fichier de connexion de bdd
require '../Controler/datediff.php';//retards de contrôle de materiels non effectués 
?>
<html>
    <head>
        <meta charset="utf-8"/>
		<title>Utilisateur</title>
        <link rel="stylesheet" href="../assets/css/style.css"/>
        <br><img src = "../assets/img/na.png" alt = "photo na" width="120px" height="120px" />
    </head>
    <body style="background-color: antiquewhite;">
        <br/>
        <h2>Bienvenue sur la page administrateur</h2>
</br></br>
   <a href ="../Controler/logout.php" onclick="if(!confirm('Voulez-vous vraiment vous déconnecter ?')) return false;">
            <img src = "../assets/img/logoutna.png" alt= "logo deconnexion" witdh="100" height="100"/>
        </a></br>
        </br></br> <a href="../View/create.php" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" button:hover="background-color: rgb(194, 2, 46);color: #ffffff;"> Créer un rappel </button></a>
        </br></br> <a href="../View/a-createutilisateur.php" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" button:hover="background-color: rgb(194, 2, 46);color: #ffffff;"> Créer un utilisateur </button></a>
        </br></br> <a href="../View/retrieve.php" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" button:hover="background-color: rgb(194, 2, 46);color: #ffffff;">Faire une recherche d'un équipement</button></a>
        </br></br> <a href="../View/update_materiel.php" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" button:hover="background-color: rgb(194, 2, 46);color: #ffffff;">Modifier le nom d'un équipement</button></a>
        </br></br> <a href="../View/update_date.php" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" button:hover="background-color: rgb(194, 2, 46);color: #ffffff;">Modifier la date d'un document</button></a>
        </br></br> <a href="../View/delete_doc.php" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" button:hover="background-color: rgb(194, 2, 46);color: #ffffff;">Supprimer un materiel avec ses documents</button></a>
        </br></br> <a href="../View/delete_mat.php" ><button style="color:rgb(194, 2, 46); cursor: pointer; background-color:#ffffff;text-align:center;padding:15px;width:200px; border-color: rgb(37, 153, 255);" button:hover="background-color: rgb(194, 2, 46);color: #ffffff;">Supprimer un materiel ayant plus de documents afféctés</button></a>
<hr>
    <table  id="tablerappels" align="center" name="tableau_retards" border="1" solid="rgb(37, 153, 255)" background-color="rgb(37, 153, 255)">
        <th colspan="2">Retard(s) de rappels de materiels</th>
    <tr>
        <td>Nombre de jours de retards</td>
        <td>Référence matériel</td>
    </tr> 
            <?php if (!empty($retards)) : //Affichage de la liste des rappels 
            foreach ($retards as $retard) : ?>
    <tr>
        <td><?php echo $retard["date_exp"];?>j de retards</td></br>
        <td><?php echo $retard["ref_materiel"];?></td></br>
    </tr>
    <?php endforeach; ?>
<?php else : ?>
  <div>Aucun retards de rappels , vous êtes à jour !</div>
<?php endif; ?>
</table>
<br><br>
<!--Fonction php qui envoie un mail si un retard de mail s'ajoute à la liste des retards de contrôle-->
<?php
/* if (!empty($retards)+1){ mail(
'jeanchristophe.moreau23@laposte.net',
'Rappel de contrôle',
'Vous avez un rappel pas à jour'
) ;
echo "Fonction correct , voir erreur smtp";
} else {
    echo "Fonction non fonctionelle";
}*/
?>
<p>Fonction mail entre commentaires *</p>
    </body>
</html>