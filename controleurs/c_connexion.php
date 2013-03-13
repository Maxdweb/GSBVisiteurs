<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$visiteur = $pdo->getInfosVisiteur($_REQUEST['login'],$_REQUEST['mdp']);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
            $_SESSION['login']= $_REQUEST['login']; // mémorise les variables de session
			$_SESSION['vis_matricule']= $visiteur['VIS_MATRICULE'];
            $_SESSION['nom']= $visiteur['VIS_NOM'];
            $_SESSION['prenom']= $visiteur['VIS_PRENOM'];
            include("vues/v_sommaire.php");
            include("vues/v_accueil.php");
			}
		break;
	}
	case 'deconnexion' :{
		unset($_SESSION['login']);
		unset($_SESSION['vis_matricule']);
		unset($_SESSION['nom']);
		unset($_SESSION['prenom']);
		include("vues/v_connexion.php");
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>