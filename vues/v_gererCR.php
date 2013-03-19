﻿<div id="contenu">
      <h2>Rapport de visite</h2>


<form method="POST" action="index.php?uc=gererCR&action=validerCR" id="formSaisie">
 <fieldset>
     <legend>Détails rapport</legend>
     <table>
        <tr>
            <td>Date Visite :</td>
    <td><input type="date" name="dateVisite" required></td>
    </tr>
    <tr>
    <td>Date Rapport : </td> 
    <td><?php echo date("d/m/Y") ?> </td>
    </tr>
    <tr>
        <td> Praticiens :</td>
        <td>
            <select name="listePraticiens" required>
                <option value="">Choisir un praticien</option>
                 <?php
                    foreach($praticiens as $unPraticien)
                    {
                  ?>
                <option value="<?php echo $unPraticien['PRA_NOM']; ?>"><?php echo $unPraticien['PRA_NOM']; ?></option>
                    <?php
                    }
                    ?>
            </select>
        </td>
            </tr>
            <tr>
            <td>Remplaçant : </td>
            <td><input type="checkbox" name="remplacant" unchecked></td>
            </tr>
            <tr>
                <td>Coefficient</td>
                <td><input type="text" name="coeff" required></td>
            </tr>
            <tr>
                <td>Motif</td>
                <td><select name="listeMotifs">
                <option selected value="choix">Choisir un motif</option>
                <option value="Periodicite">Périodicité</option>
                <option value="Rapport Annuel">Rapport Annuel</option>
                <option value="Actualisation Annuelle">Actualisation Annuelle</option>
                <option value="Autre">Autre Motif</option>
            </select> &nbsp; <input type="text" name="autreMotif" disabled></td>
            </tr>
            <tr>
                <td>Bilan :</td>
                <td><textarea name="bilan" rows="5" cols="50" placeholder="Entrez votre bilan ici."></textarea></td>
            </tr>
    </table>
    </fieldset>
    
    <fieldset>
    <legend>Eléments présentés</legend>
    <table>
    <tr>
        <td>Produit 01 : </td>
        <td><select name="listeProduits1" required>
                <option value="">Choisir un produit</option>
                 <?php
                    foreach($myMedics as $unMyMedic)
                    {
                  ?>
                <option value="<?php echo $unMyMedic['med_depotlegal']; ?>"><?php echo $unMyMedic['med_nomcommercial']; ?></option>
                    <?php
                    }
                    ?>
            </select></td>
            <td>&nbsp;Echantillons :</td>
            <td><input type="checkbox" name="echantillon1" unchecked></td>
            <td><input type="number" name="quantite1"></td>
            <td>&nbsp;Documentation offerte :</td>
            <td><input type="checkbox" name="documentation1" unchecked></td> 
            </tr>
            <tr>
        <td>Produit 02 : </td>
        <td><select name="listeProduits2" required>
                <option value="">Choisir un produit</option>
                 <?php
                    foreach($myMedics as $unMyMedic)
                    {
                  ?>
                <option value="<?php echo $unMyMedic['med_depotlegal']; ?>"><?php echo $unMyMedic['med_nomcommercial']; ?></option>
                    <?php
                    }
                    ?>
            </select></td>
            <td>&nbsp;Echantillons :</td>
            <td><input type="checkbox" name="echantillon2" unchecked></td>
            <td><input type="number" name="quantite2"></td>
            <td>&nbsp;Documentation offerte :</td>
            <td><input type="checkbox" name="documentation2" unchecked></td> 
            </tr>
            </table>
    </fieldset>
    
   <input type="reset" name="effacer" value="Annuler">
   <input type="submit" name="valider" value="Valider">
</form>

</div>