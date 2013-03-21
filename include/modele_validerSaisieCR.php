<?php

    include('fct.inc.php');

    
    /*
     * DATE
     */
    if(isset($_REQUEST["dateVisite"]))
    {
        $date = $_REQUEST["dateVisite"];
        if(!estDateValide($date))                   // verifie la validité de la date
            ajouterErreur("Date invalide");
        elseif(estDateDepassee($date))              // verifie que la date n'est pas depassée de plus d'un an
            ajouterErreur("Date depassée d'un an");
        elseif(!estDatePassee($date))                   // verifie que la date soit bien passée
            ajouterErreur ("La date n'est pas encore pass&eacute;e ");
    }
    else
        ajouterErreur ("pas de date entr&eacute;e");
    
    
    /*
     * PRODUIT
     */
    if(isset($_REQUEST["echantillon"]))
    {
        $echantillon = $_REQUEST["echantillon"];
    }
    else
        $echantillon = "false";
    
    /*
     * QUANTITE
     */
    if(isset($_REQUEST["quantite"]))
    {
        $quantite = $_REQUEST["quantite"];
    
        foreach($quantite as $uneQuantite)
        {

            if(!is_integer($uneQuantite))
                ajouterErreur("Quantit&eacute; invalide");
            elseif($uneQuantite > 99 )
                ajouterErreur("Quantit&eacute; trop grande");
            elseif($uneQuantite <= 0)
                ajouterErreur ("quantité inferieure ou egale &agrave; 0");

        }
    }
    else
        $quantite = [0,0];
    
    
    
    
    
    
    /*
     * COEFICIENT
     */
    if(isset($_REQUEST["coeff"]))
    {
        $coef = $_REQUEST["coeff"];
        if(!is_float($coef))
             ajouterErreur("coefficient invalide");
        elseif($coef < 0 )
             ajouterErreur("coefficient negatif");
        elseif($coef > 999)
            ajouterErreur ("coefficient trop grand");
    }
        
    else
        ajouterErreur ("pas de coefficient entr&eacute;");
    
   

    /*
     * MOTIF  
     */
    if(isset($_REQUEST["listeMotifs"]))
    {
        $motif = $_REQUEST["listeMotifs"];
        
        if($motif == "Autre")
        {
            if(isset($_REQUEST["autreMotif"]))
            {
                $motif = $_REQUEST["autreMotif"];
                if(!is_string($motif))
                    ajouterErreur ("Motif invalide");
            }
            else
                ajouterErreur ("veulliez entrer un motif");
        }
    }

    
  /*
   * BILAN 
   */
    if(isset($_REQUEST["bilan"]))
    {
       $bilan =  $_REQUEST["bilan"];
       
       if(!is_string($bilan))
           ajouterErreur ("bilan invalide");
       
    }
    else
        ajouterErreur("veuillez entrer votre bilan");
    
    
    /*
     *  NUMERO PRATICANT
     */
    if(isset($_REQUEST["listePraticiens"]))
    {
        $numPra = $_REQUEST["listePraticiens"];
        
        if($numPra == TRUE)
            $numPra = 1;
        else
            $numPra = 0;
    }
    else
        ajouterErreur("pas de praticien selectionn&eacute;");
    
    
    /*
     * REMPLACANT
     */
    if(isset($_REQUEST["remplacant"]))
    {
        $remplacant = $_REQUEST["remplacant"];
        
        if($remplacant == TRUE)
            $remplacant = 1;
        else
            $remplacant = 0;
    }
    else
        ajouterErreur("pas de retour de remplacant");
    
    
    
?>