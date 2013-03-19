<!-- Affichage du tableau de consultation des praticiens  -->


 <center>
    <a href="index.php?uc=consulterPratictiens" title="Consulter les praticiens">Retour &agrave la liste </a>
 </center>
 
 <fieldset>
     <legend> <?php echo $praticien[0]['PRA_NOM']." ".$praticien[0]['PRA_PRENOM']; ?>  </legend>
        <table style=""id="detailPraticien" > 

            <tr>
                <td>
                    Numero : 
                </td>
                <td>
                    <?php echo $praticien[0]['PRA_NUM']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nom : 
                </td>
                <td>
                    <?php echo $praticien[0]['PRA_NOM']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    prenom : 
                </td>
                <td>
                    <?php echo $praticien[0]['PRA_PRENOM']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Adresse : 
                </td>
                <td>
                    <?php echo $praticien[0]['PRA_ADRESSE']." ".$praticien[0]['PRA_CP']." ".$praticien[0]['PRA_VILLE']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Notoriete : 
                </td>
                <td>
                    <?php echo $praticien[0]['PRA_COEFNOTORIETE']; ?>
                </td>
            </tr>    
            <tr>
                <td>
                    Poste :
                </td>
                 <td>
                    <?php echo $praticien[0]['TYP_LIBELLE']; ?>
                </td>
            </tr>

        </table>
 </fieldset>