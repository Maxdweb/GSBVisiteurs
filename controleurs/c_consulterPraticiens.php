<?php

    // affichage de l'en-tete
    include('vues/v_sommaire.php');
    include('include/modele.inc.php');
    
    // selection du tri du tableau (par defaut -> id)
    if( !isset($_REQUEST['tri']))
        $tri = "PRA_NUM";
    else 
        $tri = $_REQUEST['tri'];
    
    // recuperation des informations
    $praticiens = getDetailPraticiens($tri);
    
    include('vues/v_praticiens.php');
    
?>
