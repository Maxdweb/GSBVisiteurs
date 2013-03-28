<?php
include("vues/v_sommaire.php");


$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['vis_matricule'];
$praticiens = $pdo->getTousPracticiens("PRA_NOM");
$myMedics = $pdo->getIdAndNameOfMedics();

switch($action)
{
	case "saisirCR" :
	{
		include("vues/v_gererCR.php");
                break;
	}
	case "validerCR" :
	{
		include('include/modele_validerSaisieCR.php');
                
		if(isset($_REQUEST['erreurs']))
			include('vues/v_erreurs.php');
		else
		{                  
                      // insertion du rapport
                      $pdo->insertRapportVisite($_SESSION['vis_matricule'] , $numPra , $date , $bilan , $motif , $remplacant);
                    
                      // misa à jour du coefficient
                      $pdo->updateCoeffNotoriete($coef, $numPra);
                      
                      // insertion des produit
                      for ($i=0; $i< sizeof($produit); $i++ )
                      {
                          if ($produit[$i]!="")
                            $pdo->insertOffrir($_SESSION['vis_matricule'] , $produit[$i] , $quantite[$i] , $doc[$i] , $echantillon[$i]);
                      }
			//include('vues/v_gererCR.php');
		}
                break;
	}
	default :
	{
		include('vues/v_gererCR.php');
                break;
	}
}

?>