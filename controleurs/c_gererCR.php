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
			// INSERTION A L'AIDE DE LA FONCTION
			include('vues/v_gererCR.php');
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