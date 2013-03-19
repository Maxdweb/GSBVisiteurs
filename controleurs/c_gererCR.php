<?php
include("vues/v_sommaire.php");

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['vis_matricule'];
$praticiens = $pdo->getTousPraticiens("PRA_NOM");

switch($action)
{
	case "saisirCR" :
	{
		include("vues/v_gererCR.php");
	}
	case "valideCR" :
	{
		include('modele_valideSasieCR.php');
		if($_REQUEST['erreurs'])
			include('vues/v_erreurs.php');
		else
		{
			// INSERTION A L'AIDE DE LA FONCTION
			include('vues/v_gererCR.php');
		}
	}
	default :
	{
		include('vues/v_gererCR.php');	
	}
}

?>