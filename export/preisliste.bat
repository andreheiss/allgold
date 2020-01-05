mysqldump --xml -u root -h localhost datenbank artikel > dbartikel.xml

java -cp saxon9he.jar net.sf.saxon.Transform -o:preisliste.fo dbartikel.xml preisliste.xsl

fop preisliste.fo preisliste.pdf

start preisliste.pdf