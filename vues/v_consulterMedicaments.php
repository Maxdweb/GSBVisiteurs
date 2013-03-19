<div id="consulterMedicaments">
	<table>
		<tr>
			<td>Choisir un médicament :</td>
			<td>	
				<select id="medicsList" onchange="request();">
					<?php
						foreach ($myMedics as $elt) { ?>
							<option value="<?php echo $elt['med_depotlegal']; ?>"><?php echo $elt['med_nomcommercial']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>DEPOT LEGAL</td>
			<td><input type="text" id="medicsDepot"/></td>
		</tr>
		<tr>
			<td>NOM COMMERCIAL</td>
			<td><input type="text" id="medicsNom"/></td>
		</tr>
		<tr>
			<td>FAMILLE</td>
			<td><input type="text" id="medicsFamille"/></td>
		</tr>
		<tr>
			<td>COMPOSITION</td>
			<td><textarea cols="50" rows="5" id="medicsCompo"></textarea></td>
		</tr>
		<tr>
			<td>EFFETS</td>
			<td><textarea cols="50" rows="5" id="medicsEffet"></textarea></td>
		</tr>
		<tr>
			<td>CONTRE INDICATIONS</td>
			<td><textarea cols="50" rows="5" id="medicsContreIndic"></textarea></td>
		</tr>
		<tr>
			<td>PRIX</td>
			<td><input type="text" id="medicsPrix"/></td>
		</tr>
	</table>
</div>