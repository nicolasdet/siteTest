# siteTest



## set up 

git clone https://github.com/nicolasdet/siteTest.git

composer update 

+ crée une base de donnée sql et configurer application/config/database pour le nom de la base, le host, le user et le mdp 

executer toute les requete sql dans application/migrationSql. les faire dans l'ordre de préférence. 


lancer le serveur apache !
(facultatif)  configurer le virtualHost si vous voulez sans oublier de changer la baseUrl dans config/config et partout ou on défini l'environement... 



et voila le site est pret a fonctionner !

## Test 

testunitraire = phpUnit
Bdd           = Behat + mink + sélénium + chrome 


les Features ce trouvent dans le dossier du même nom 
Il faut lancer le serveur sélénium:

assumon que MonProjet correspond a la racine du projet.

$ cd MonProjet/TestBehat/
$ java -Dwebdriver.gecko.driver=E:\chromedriver.exe -jar selenium.jar

le driver chrome est sur mon PC dans E:\ mais j'ai mis le fichier dans TestBehat/   a vous de le metre ou vous voulez et d'indiquer le bon path dans la commande.

$ cd MonProjet
$ ./vendor/bin/behat   (executer cette commande dans le git bash c'est mieux si on est sur windows )