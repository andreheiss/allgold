document.querySelector("#salebuttons").addEventListener('click', berechne_gesamtpreis);

function berechne_gesamtpreis()
{
	var Anzahl = document.getElementById("Anzahl").value,
		Preis = document.getElementById("Preis").value,
		gp = Anzahl*Preis;
		
	document.querySelector("output").textContent = gp;
}