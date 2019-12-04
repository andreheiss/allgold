<?php

require("php/loginSystem.php");
require("php/header.php");
	
echo('<main>');
if(istEingeloggt())
{
	$_SESSION['eingeloggt'] = '';
	echo('<p>Du hast dich erfolgreich ausgeloggt. Weiterleiten...</p>');
	header("Refresh: 3; URL=http://localhost/index.php");
}
else
{
	echo('<p>Du musst dich zuvor einloggen. Weiterleiten...</p>');
	header("Refresh: 3; URL=http://localhost/login.php");
}
echo('</main>');
require("php/footer.php");

?>