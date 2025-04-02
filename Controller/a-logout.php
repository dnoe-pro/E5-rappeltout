<?php
session_destroy();
//ligne de code qui renvoie à la page index
echo '<META HTTP-EQUIV="refresh" content="0;URL=index.php?action=accueil">';
?>