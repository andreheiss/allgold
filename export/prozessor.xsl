<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
	<head>
		<title>
			<xsl:value-of select="pma_xml_export/database/@name"/>
		</title>
	</head>
	<body>
		<p>
			<h3>
				<xsl:value-of select="pma_xml_export/database/@name"/>
			</h3>
		</p>
		<table border="2">
			<tr>
				<td> <b>ArtikelNr</b> </td>
				<td> <b>Name</b> </td>
				<td> <b>Beschreibung</b> </td>
				<td> <b>Kategorie</b> </td>
				<td> <b>Preis</b> </td>
			</tr>
			
			<xsl:for-each select="/pma_xml_export/database/table">
			<tr>
				<td> <xsl:value-of select="column[@name='ArtikelNr']"/> </td>
				<td> <xsl:value-of select="column[@name='Name']"/> </td>
				<td> <xsl:value-of select="column[@name='Beschreibung']"/> </td>
				<td> <xsl:value-of select="column[@name='Kategorie']"/> </td>
				<td> <xsl:value-of select="column[@name='Preis']"/> </td>
			</tr>
			</xsl:for-each>
		
		</table>
		
		<br></br>
		<p><b> Artikel sortiert nach Artikelnamen: </b></p>
		<xsl:for-each select="/pma_xml_export/database/table/column[@name='Name']">
		<xsl:sort order="ascending"/>
		<xsl:value-of select="../column[@name='Name']"/>
		(<xsl:value-of select="../column[@name='Beschreibung']"/>)
		<br></br>
		</xsl:for-each>
		
		<br></br>
		<p><b> Artikel sortiert nach Höchstpreis: </b></p>
		<xsl:for-each select="/pma_xml_export/database/table/column[@name='Preis']">
		<xsl:sort order="descending" data-type="number"/>
		<xsl:value-of select="../column[@name='Name']"/>
		(<xsl:value-of select="../column[@name='Beschreibung']"/>):
		<xsl:value-of select="../column[@name='Preis']"/>€
		<br></br>
		</xsl:for-each>
		
		
	</body>
</html>

</xsl:template>
</xsl:stylesheet>