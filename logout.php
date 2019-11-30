<?php

require("php/loginSystem.php");
require("php/header.php");
	
echo('<main>');
if(istEingeloggt())
{
	$_SESSION['eingeloggt'] = '';
	echo('<p>Du hast dich erfolgreich ausgeloggt.</p>');
	echo('<p><a href="/index.php">Zurück zur Startseite</a></p>');
}
else
{
	echo('<p>Du musst dich zuvor einloggen.</p>');
	echo('<p><a href="/index.php">Zurück zur Startseite</a></p>');
}
echo('</main>');
require("php/footer.php");

?>