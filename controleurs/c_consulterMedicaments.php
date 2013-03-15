<?php
/* instanciation des variables php */
$myMedics = $pdo->getIdAndNameOfMedics();

/* inclusion des vues */
include("vues/v_sommaire.php");
include("vues/v_".$uc.".php");
?>