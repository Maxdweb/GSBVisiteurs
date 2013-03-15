<?php

    // affichage de l'en-tete
    include('v_entete.php');
    include('modele.inc.php');
    
    // selection du tri du tableau (par defaut -> id)
    if( !isset($_REQUEST['tri']))
        $tri = "PRA_NUM";
    else 
        $tri = $_REQUEST['tri'];
    
    // recuperation des informations
    $praticiens = getDetailPraticiens($tri);
    
    include('v_praticiens.php');
    
?>
