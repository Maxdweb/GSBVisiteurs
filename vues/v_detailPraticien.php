<!-- Affichage du tableau de consultation des praticiens  -->

    
<table> 
    
    <tr>
        <td>
            <?php echo $praticien[0]['PRA_NUM']; ?>
        </td>
        <td>
            <?php echo $praticien[0]['PRA_NOM']; ?>
        </td>
        <td>
            <?php echo $praticien[0]['PRA_PRENOM']; ?>
        </td>
        <td>
            <?php echo $praticien[0]['PRA_ADRESSE']." ".$praticien[0]['PRA_CP']." ".$praticien[0]['PRA_VILLE']; ?>
        </td>
        <td>
            <?php echo $praticien[0]['PRA_COEFNOTORIETE']; ?>
        </td>
    </tr>
   

</table>
    