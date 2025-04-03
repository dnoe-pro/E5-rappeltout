<body style="background-color: antiquewhite;">
    
    <table id="tablerappels" align="center" name="tableau_retards" border="1" solid="rgb(37, 153, 255)"
        background-color="rgb(37, 153, 255)">
        <th colspan="2">Retard(s) de rappels de materiels</th>
        <tr>
            <td>Nombre de jours de retards</td>
            <td>Référence matériel</td>
        </tr>
        <?php if (!empty($retards)): //Affichage de la liste des rappels 
                foreach ($retards as $retard): ?>
                <tr>
                    <td><?php echo $retard["date_exp"]; ?>j de retards</td></br>
                    <td><?php echo $retard["ref_materiel"]; ?></td></br>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
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
