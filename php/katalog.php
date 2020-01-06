<?php
	exec('mysqldump --xml -u root -h localhost datenbank > ../export/katalog.xml');
	exec('fop -xml ../export/katalog.xml -xsl ../export/katalog.xsl -pdf ../export/katalog.pdf');
	header("Refresh: 0; URL=http://localhost/export/katalog.pdf");
?>