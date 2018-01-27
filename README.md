# siteTest


## le projet


Ce site sert d'exemple de test a des test d'intégration / unitaires

J'en profite pour en faire un Boilerplate codeIgniter propre, afin de déployer un projet capable d'étre tester en quelques lignes.

Ce projet disposera de quesques routes, Une ou deux tables, surrement un CRUD et tout ces tests. 

Dans la forme l'application représente un site proposant un sérvice gratuit ou payent avec une petite inscription. 

Je suis pas sure d'avoir le temp de tout finir donc a voir... 



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



## code Igniter

### routes 

les routes ce trouvent dans config route 

premier param = dossier/page rechercher
deuxieme param s'il trouve pas une page il cherche la fonction 
troisieme param il injecte (:num) en param de la fonction

exemple :
$route['user/(:num)'] = 'user/index/$1';

ira chercher controller/user  fouction index($1)

### controller. 


tout les controller sont dans application/controller 

majuscule au Nom du fichier et de la classe

tout les controller extends de MY_Controller

pour rendre une vue on fait  $this->render('maVue');

pour apeller une classe du model on fait :  $this->load->model('monModel');

pour injecter des data a la vue on fait : $this->theme->data('var', $data);

pour les css et js on fait : $this->theme->js   OU $this->theme-css

### model. 


les model sont dans application/model

ils ont tous la même sintaxe il sufit de regarder "produit" et de faire pareille 

Un model = une table, il faut juste déclarer le nom de la table et la primary key    ( oui c'est plus rapide/simple qu'un orm )

il existe pleins de fonction prédéfini tel que $this->get(id)   ou $this->get_all()  ou $this->update ..... on peut aussi écrire les requete a la main !

### migration

il n'y a pas d'orm pour mapper la bdd alors je stoque chaque requete dans un dossier migration. 

je nome c'est migrations par ordre et éventuellement avec un déscriptif ! 

il faut évidament toute les executée sur une nouvelle bdd !.

on les apelles dans le controller comecesi $this->load->model('monModel');

### vue 

dans application/view/pages

c'est une vue quoi :) 

le layout est défini dans application/view/layout

et ce layout utilise des slice dans application/view/slices

elle doivent etre déclarer dans le controller cf: MY_Controller 

