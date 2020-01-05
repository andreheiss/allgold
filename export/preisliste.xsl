<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<fo:root xmlns:fo="http://www.w3.org/1999/XSL/Format">

	<fo:layout-master-set>
		<fo:simple-page-master master-name="Preisliste" page-height="297mm" page-width="210mm" margin-left="25mm" margin-right="20mm" margin-top="20mm" margin-bottom="20mm">
			<fo:region-body margin-top="20mm" margin-bottom="20mm"/>
			<fo:region-before extent="20mm"/>
			<fo:region-after extent="20mm"/>
		</fo:simple-page-master>
	</fo:layout-master-set>
	
	<fo:page-sequence master-reference="Preisliste">
		<fo:flow flow-name="xsl-region-body">
			<fo:block font-size="18px" text-align="center" space-before="5mm" space-after="5mm"> Allgold Artikelpreise </fo:block>
			
			<fo:block>
				<fo:table background-color="#B8DB7D" border-style="solid" border-width="1px" border-color="green">
				
					<fo:table-header color="green" border-style="dotted" border-width="1px" border-color="green">
						<fo:table-row>
							<fo:table-cell>
								<fo:block>ArtikelNr</fo:block>
							</fo:table-cell>
							<fo:table-cell>
								<fo:block>Name</fo:block>
							</fo:table-cell>
							<fo:table-cell>
								<fo:block>Beschreibung</fo:block>
							</fo:table-cell>
							<fo:table-cell>
								<fo:block>Kategorie</fo:block>
							</fo:table-cell>
							<fo:table-cell>
								<fo:block>Preis</fo:block>
							</fo:table-cell>
						</fo:table-row>
					</fo:table-header>
					
					<fo:table-footer color="green" border-style="dotted" border-width="1px" border-color="green">
						<fo:table-row>
							<fo:table-cell number-columns-spanned="5">
								<fo:block font-size="8px" text-align="center"> © 2020 Andre Heiß | Praktikum Internettechnologien </fo:block>
							</fo:table-cell>
						</fo:table-row>
					</fo:table-footer>
					
					<fo:table-body>
						<xsl:for-each select="/mysqldump/database/table_data/row">
							<fo:table-row>
								<fo:table-cell>
									<fo:block> <xsl:value-of select="field[@name='ArtikelNr']"/> </fo:block>
								</fo:table-cell>
								<fo:table-cell>
									<fo:block> <xsl:value-of select="field[@name='Name']"/> </fo:block>
								</fo:table-cell>
								<fo:table-cell>
									<fo:block> <xsl:value-of select="field[@name='Beschreibung']"/> </fo:block>
								</fo:table-cell>
								<fo:table-cell>
									<fo:block> <xsl:value-of select="field[@name='Kategorie']"/> </fo:block>
								</fo:table-cell>
								<fo:table-cell>
									<fo:block> <xsl:value-of select="field[@name='Preis']"/> </fo:block>
								</fo:table-cell>
							</fo:table-row>
						</xsl:for-each>
					</fo:table-body>
					
				</fo:table>
			</fo:block>
			
		</fo:flow>
	</fo:page-sequence>
	
</fo:root>
</xsl:template>
</xsl:stylesheet>