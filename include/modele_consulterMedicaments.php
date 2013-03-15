<?php
header('content-type:text/xml');

include('modele.inc.php');
$pdo = PdoGsb::getPdoGsb();

$myMedic = $pdo->getMedicById($_POST['id']);
?>
<?xml version="1.0" encoding="UTF-8"?>
<medicament>
	<depot><?php echo (isset($myMedic[0]['MED_DEPOTLEGAL'])) ? $myMedic[0]['MED_DEPOTLEGAL'] : "null" ; ?></depot>
	<nom><?php echo (isset($myMedic[0]['MED_NOMCOMMERCIAL'])) ? $myMedic[0]['MED_NOMCOMMERCIAL'] : "null"; ?></nom>
	<famille><?php echo (isset($myMedic[0]['FAM_CODE'])) ? $myMedic[0]['FAM_CODE'] : ""; ?></famille>
	<compo><?php echo (isset($myMedic[0]['MED_COMPOSITION'])) ? $myMedic[0]['MED_COMPOSITION'] : "null"; ?></compo>
	<effet><?php echo (isset($myMedic[0]['MED_EFFETS'])) ? $myMedic[0]['MED_EFFETS'] : "null"; ?></effet>
	<indic><?php echo (isset($myMedic[0]['MED_CONTREINDIC'])) ? $myMedic[0]['MED_CONTREINDIC'] : "null"; ?></indic>
	<prix><?php echo (isset($myMedic[0]['MED_PRIXECHANTILLON'])) ? $myMedic[0]['MED_PRIXECHANTILLON'] : "null"; ?></prix>
</medicament>