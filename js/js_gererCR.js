function forceDateInput(keyEvent)
{
	var myInput = document.getElementsByName('dateVisite')[0];
	var keynum;
	var accept = '0123456789';

	// RECUPERATION DU CODE DE LA TOUCHE PRESSEE
	if(window.event) //IE
	{					
		keynum = keyEvent.keyCode;
	} 
	else if(keyEvent.which) // Netscape/Firefox/Opera
	{ 					
		keynum = keyEvent.which;
	}

	// OPERATION DE FORCAGE DE LA SAISIE
	// TRUE -> Saisie du caractère autorisée
	// FALSE -> Saisie du caractère non-autorisée
	if(myInput.value.length == 2 && accept.indexOf(String.fromCharCode(keynum)) >= 0)
	{
		myInput.value += '/';
		return true;
	}
	else if(myInput.value.length == 5 && accept.indexOf(String.fromCharCode(keynum)) >= 0)
	{
		myInput.value += '/';
		return true;
	}
	// si la saisie est une lettre
	else if(keynum != 8 && accept.indexOf(String.fromCharCode(keynum)) == -1)
	{
		return false;
	}
}

function checkMotif()
{
	if(document.getElementsByName('listeMotifs')[0].value == "Autre")
		document.getElementsByName('autreMotif')[0].disabled = false;
	else
		document.getElementsByName('autreMotif')[0].disabled = true;
}

function checkProduit(targetEvent)
{
	var myTarget = targetEvent.target;

	if (myTarget.name[myTarget.name.length - 2] == 0) 
	{
		if(myTarget.value != "")
		{
			document.getElementsByName('echantillon[0]')[0].disabled = false;
			document.getElementsByName('documentation[0]')[0].disabled = false;
		}
		else
		{
			document.getElementsByName('echantillon[0]')[0].disabled = true;
			document.getElementsByName('documentation[0]')[0].disabled = true;
			document.getElementsByName('quantite[0]')[0].disabled = true;
		}
	}
	else if (myTarget.name[myTarget.name.length - 2] == 1)
	{
		if(myTarget.value != "")
		{
			document.getElementsByName('echantillon[1]')[0].disabled = false;
			document.getElementsByName('documentation[1]')[0].disabled = false;
		}
		else
		{
			document.getElementsByName('echantillon[1]')[0].disabled = true;
			document.getElementsByName('documentation[1]')[0].disabled = true;
			document.getElementsByName('quantite[1]')[0].disabled = true;
		}
	}
}

function checkEchantillon(targetEvent)
{
	var myTarget = targetEvent.target;

	if (myTarget.name[myTarget.name.length - 2] == 0) 
	{
		if(myTarget.checked == true)
			document.getElementsByName('quantite[0]')[0].disabled = false;
		else
			document.getElementsByName('quantite[0]')[0].disabled = true;
	}
	else if (myTarget.name[myTarget.name.length - 2] == 1)
	{
		if(myTarget.checked == true)
			document.getElementsByName('quantite[1]')[0].disabled = false;
		else
			document.getElementsByName('quantite[1]')[0].disabled = true;
	}
}