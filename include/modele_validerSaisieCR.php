<?php

    
    /*
     * DATE
     */
    if(isset($_REQUEST["dateVisite"]))
    {
        $date = $_REQUEST["dateVisite"];
        
        $date = dateAnglaisVersFrancais($date);
               
        if(!estDateValide($date))                   // verifie la validité de la date
            ajouterErreur("Date invalide");
        elseif(estDateDepassee($date))              // verifie que la date n'est pas depassée de plus d'un an
            ajouterErreur("Date depassée d'un an");
        elseif(!estDatePassee($date))                   // verifie que la date soit bien passée
            ajouterErreur ("La date n'est pas encore pass&eacute;e ");
    
        $date = dateFrancaisVersAnglais($date);
        
        $date = str_replace('/', '-', $date);
    }
    else
        ajouterErreur ("pas de date entr&eacute;e");
    
    
    /*
     * ECHANTILLON
     */
    if(isset($_REQUEST["echantillon"]))
    {
        $echantillon = $_REQUEST["echantillon"];
        
        for ($i =0 ; $i<2 ; $i++)
        {
            if (isset($echantillon[$i]))
            {
                if ($echantillon[$i] == TRUE)
                    $echantillon[$i] = 1 ;
                else
                    $echantillon[$i] = 0 ;
            }
            else 
                $echantillon[$i] = 0 ;
        }
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

            if(preg_match("/[^0-9]/", $uneQuantite))
                ajouterErreur("Quantit&eacute; invalide");
            elseif($uneQuantite > 99 )
                ajouterErreur("Quantit&eacute; trop grande");
            elseif($uneQuantite <= 0)
                ajouterErreur ("quantité inferieure ou egale &agrave; 0");

        }
    }
    else
        $quantite = array(0,0);
    
    
    
    
    
    
    /*
     * COEFICIENT
     */
    if(isset($_REQUEST["coeff"]))
    {
        $coef = $_REQUEST["coeff"];
        if(preg_match("/[^0-9]/", $coef))
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
        $remplacant = 1;
    else
        $remplacant = 0;
    
    /*
     * DOC
     */
    
    if(isset($_REQUEST["documentation"]))
    {
        $doc = $_REQUEST["documentation"];
    
        for ($i =0 ; $i<2 ; $i++)
        {
            if (isset($doc[$i]))
            {
                if ($doc[$i] == TRUE)
                    $doc[$i] = 1 ;
                else
                    $doc[$i] = 0 ;
            }
            else 
                $doc[$i] = 0 ;
        }
    }
    else
        $doc = array(0,0);
    
    /*
     * PRODUIT
     */
    if(isset($_REQUEST["listeProduits"]))
    {
        $produit = $_REQUEST["listeProduits"];
    }
    else
        ajouterErreur("pas de produits");
?>