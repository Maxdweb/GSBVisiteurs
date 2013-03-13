<?php
require_once("include/fct.inc.php");
require_once ("include/modele.inc.php");

include("vues/v_entete.php") ;

session_start();
$pdo = PdoGsb::getPdoGsb();

if(!isset($_REQUEST['uc']) && (!isset($_SESSION['login'])))
    $uc = 'connexion';
else if(!isset($_REQUEST['uc']) && (isset($_SESSION['login'])))
	$uc = '';
else
	$uc = $_REQUEST['uc'];

switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererCR':{
		include("controleurs/c_gererCR.php");break;
	}
	case 'consulterMedicaments' :{
		include("controleurs/c_consulterMedicaments.php");break;
	}
	case 'consulterPratictiens' :{
		include("controleurs/c_consulterPratictiens.php");break; 
	}
	default :{
		include("vues/v_sommaire.php");
		include("vues/v_accueil.php");
		break;
	}
}

include("vues/v_pied.php") ;
?>