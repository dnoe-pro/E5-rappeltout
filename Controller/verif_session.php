<?php
session_start();
if (!isset($_SESSION["id_utilisateur"])) {
 $_SESSION["id_utilisateur"] = null;
} else {
  header("location: index.php");
}
?>