document.querySelector("#salebuttons").addEventListener('click', berechne_gesamtpreis);

function berechne_gesamtpreis()
{
	var Anzahl = parseInt(document.getElementById("Anzahl").value),
		Preis = parseInt(document.getElementById("Preis").value),
		gp = Anzahl*Preis;
		
	document.querySelector("output").textContent = gp;
}