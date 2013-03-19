<?php

    include('fct.inc.php');

    //recuperation des informations
    $date = $_REQUEST["dateVisite"];
    
    if(isset($_REQUEST["quantite"]))
        $quantité = $_REQUEST["quantite"];
    
    $coef = $_REQUEST["coeff"];
    
//  coeficient, quantité()

    /**
     *  verification de la date 
     */
   
    if(!estDateValide($date))                   // verifie la validité de la date
        ajouterErreur("Date invalide");
    elseif(estDateDepassee($date))              // verifie que la date n'est pas depassée de plus d'un an
        ajouterErreur("Date depassée d'un an");
    elseif(!estDatePassee($date))                   // verifie que la date soit bien passée
        ajouterErreur ("La date n'est pas encore pass&eacute;e !");
    
        

    // si elle est pas passée
    
    /**
     *  verification du numero
     */
    
    // verifie si c'est un integer
    if(!is_integer($numero))
        ajouterErreur("Numero invalide");
    
    // verifie si il n'est pas deja present dans la base
    
    
  
    /**
     *  verification de la quantité
     */    
     if(!is_integer($quantité))
         ajouterErreur("Quantit&eacute; invalide");
        
?>