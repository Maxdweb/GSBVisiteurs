<!-- Affichage du tableau de consultation des praticiens  -->

    
<table id="detailPraticien"> 
    
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
    