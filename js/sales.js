document.getElementById("ArtikelNr").addEventListener('change', artikelpreis);
document.getElementById("Anzahl").addEventListener('change', gesamtpreis);

function artikelpreis()
{	
	var id = document.getElementById("ArtikelNr").value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		document.getElementById("Preis").value = this.responseText;
	};
	xhttp.open("GET", "php/artikelpreis.php?id="+id, true);
	xhttp.send();
}

function gesamtpreis()
{
	var Anzahl = document.getElementById("Anzahl").value,
		Preis = document.getElementById("Preis").value,
		gp = Anzahl*Preis;
	
	document.getElementById("Gesamtpreis").value = gp;
}