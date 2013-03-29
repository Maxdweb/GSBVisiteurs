function getXHR()
{
	var myXhr = null;

	if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.XMLHttpRequest) {
            myXhr = new XMLHttpRequest();
        } else {
            try {
                myXhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                myXhr = new ActiveXObject("Microsoft.XMLHTTP");
            } 
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }

    return myXhr;
}

function request() {
    var parser=new DOMParser();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            alert(parser.parseFromString(xhr.responseText,'text/xml').documentElement.innerText);
        	bindXHRxml(xhr.responseXML);
        }
    };
    
    var medicList = document.getElementById("medicsList");

    xhr.open("POST", "include/modele_consulterMedicaments.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("id=" + medicList.options[medicList.selectedIndex].value);
}

function bindXHRxml(xmlXHR)
{
	try {
		var xml = xmlXHR.documentElement;
		document.getElementById("medicsDepot").value = xml.getElementsByTagName("depot")[0].firstChild.nodeValue;
		document.getElementById("medicsNom").value = xml.getElementsByTagName("nom")[0].firstChild.nodeValue;
		document.getElementById("medicsFamille").value = xml.getElementsByTagName("famille")[0].firstChild.nodeValue;
		document.getElementById("medicsCompo").value = xml.getElementsByTagName("compo")[0].firstChild.nodeValue;
		document.getElementById("medicsEffet").value = xml.getElementsByTagName("effet")[0].firstChild.nodeValue;
		document.getElementById("medicsContreIndic").value = xml.getElementsByTagName("indic")[0].firstChild.nodeValue;
		document.getElementById("medicsPrix").value = xml.getElementsByTagName("prix")[0].firstChild.nodeValue;
	} catch(e) {
		alert("une erreur est survenue");
	}
}

var xhr = getXHR();