<!-- Affichage du tableau de consultation des praticiens  -->

<fieldset>
    <legend> Praticiens </legend>
    
<table style=" ">
    <!-- Affichage des titres -->
    <tr style="border: 1px solid black; ">
        <th>
            <a href ="index.php?uc=consulterPratictiens&tri=PRA_NUM" > Numero </a>
        </th>
        <th>
             <a href ="index.php?uc=consulterPratictiens&tri=PRA_NOM" > Nom </a>
        </th>
        <th>
             <a href ="index.php?uc=consulterPratictiens&tri=PRA_PRENOM" > Prenom </a>
        <!-- Adresse, code postal, ville -->
        <th>
             <a href ="index.php?uc=consulterPratictiens&tri=PRA_ADRESSE" > Adresse </a>
        </th>
        <th>
             <a href ="index.php?uc=consulterPratictiens&tri=PRA_COEFNOTORIETE" > Notori&eacute;t&eacute; </a>
        </th>
        <th>
             <a href ="index.php?uc=consulterPratictiens&tri=TYP_CODE" > Code </a>
        </th>
    </tr>   

<?php


    // parcours du tableau 
    foreach($praticiens as $unPraticien)
    {
?>
    <tr>
        <td>
            <?php echo $unPraticien['PRA_NUM']; ?>
        </td>
        <td>
            <?php echo $unPraticien['PRA_NOM']; ?>
        </td>
        <td>
            <?php echo $unPraticien['PRA_PRENOM']; ?>
        </td>
        <td>
            <?php echo $unPraticien['PRA_ADRESSE']." ".$unPraticien['PRA_CP']." ".$unPraticien['PRA_VILLE']; ?>
        </td>
        <td>
            <?php echo $unPraticien['PRA_COEFNOTORIETE']; ?>
        </td>
        <td>
            <?php echo $unPraticien['TYP_CODE']; ?>
        </td>
    </tr>
   
<?php   
    }
?>

    </table>
</fieldset> 
    