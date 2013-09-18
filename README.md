tests
=====

repository test pour tester travis


installation
=============

installer les librairies externes: ''' composer install '''

dans le navigateur appeler http://localhost/tests/index.php/hello/word

doc:
http://silex.sensiolabs.org/
http://silex.sensiolabs.org/doc/testing.html

todo
====

faire un test unitaire sur la méthode add de la classe calculette

tester son intégration avec Travis



faire un test fonctionnel sur l'url "hello/word"

tester son intégration avec Travis




intégrer behat et sahi

tester son intégration avec Travis


-------------------------------------------------
générer une archive du vendor sans les répertoires .git
composer update
tar cfvz  vendor.tar.gz vendor --exclude-vcs
mv vendor vendor_bakup
tar xfvz vendor.tar.gz
rm -r vendor_bakup
rm vendor.tar.gz

