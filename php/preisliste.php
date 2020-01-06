<?php
	exec('mysqldump --xml -u root -h localhost datenbank artikel > ../export/preisliste.xml');
	exec('fop -xml ../export/preisliste.xml -xsl ../export/preisliste.xsl -pdf ../export/preisliste.pdf');
	header("Refresh: 0; URL=http://localhost/export/preisliste.pdf");
?>