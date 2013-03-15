<?php

    // affichage de l'en-tete
    include('vues/v_sommaire.php');
    
    
    // Affichage en detail
    if(isset($_REQUEST['detail']))
    {
        $num = $_REQUEST['detail'];
        $praticien = $pdo->getInfosPraticien($num);
        
        include('vues/v_detailPraticien.php');
    }
    else // affichage global
    {
        // selection du tri du tableau (par defaut -> id)
        if( !isset($_REQUEST['tri']))
            $tri = "PRA_NUM";
        else 
            $tri = $_REQUEST['tri'];

        // recuperation des informations
        $praticiens = $pdo->getTousPracticiens($tri);
        
        include('vues/v_praticien.php');
    }
    
    
    

        
?>
