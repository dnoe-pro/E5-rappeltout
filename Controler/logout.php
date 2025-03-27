<?php
session_start();
session_destroy();
//ligne de code qui renvoie à la page index
header("location:../View/index.html");
?>