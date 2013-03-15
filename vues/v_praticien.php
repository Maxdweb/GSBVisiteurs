<!-- Affichage du tableau de consultation des praticiens  -->


<table>
    <!-- Affichage des titres -->
    <tr>
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
            <?php $unPraticien['PRA_NUM'] ?>
        </td>
        <td>
            <?php $unPraticien['PRA_NOM'] ?>
        </td>
        <td>
            <?php $unPraticien['PRA_PRENOM'] ?>
        </td>
        <td>
            <?php $unPraticien['PRA_ADRESSE']." ".$unPraticien['PRA_CP']." ".$unPraticien['PRA_VILLE'] ?>
        </td>
        <td>
            <?php $unPraticien['PRA_COEFNOTORIETE'] ?>
        </td>
        <td>
            <?php $unPraticien['TYP_CODE'] ?>
        </td>
    </tr>
<?php   
    }
?>