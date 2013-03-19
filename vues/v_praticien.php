<!-- Affichage du tableau de consultation des praticiens  -->

<fieldset>
    <legend> Praticiens </legend>
    
<table style="border-collapse: collapse;">
    
    <!-- Affichage des titres -->
    <tr style="border: 1px solid black; background-color: #c6d2da">
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
            &nbsp;
        </th>
    </tr>   

<?php

    $i = 0;

    // parcours du tableau 
    foreach($praticiens as $unPraticien)
    {
        // changement de couleur pour un sur deux
        if($i%2 == 0)
            echo '<tr style = "background-color: #77AADD;">';
        else
            echo '<tr>'
        
?>
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
             <a href ="index.php?uc=consulterPratictiens&detail=<?php echo $unPraticien['PRA_NUM']; ?> " >  Detail </a>
        </td>
    </tr>
   
<?php 
    $i ++;
    
    }
?>

    </table>
</fieldset> 
    