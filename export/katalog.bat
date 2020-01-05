mysqldump --xml -u root -h localhost datenbank > dbkatalog.xml

java -cp saxon9he.jar net.sf.saxon.Transform -o:katalog.fo dbkatalog.xml katalog.xsl

fop katalog.fo katalog.pdf

start katalog.pdf