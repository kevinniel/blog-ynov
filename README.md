# Support de cours
Présentation de Laravel et bases

## Artisan
Artisan est une interface utilisable en ligne de commande (CLI - Command Line Interface).

### Utilisation de base
Artisan est basé sur PHP, et nécessite donc l'utilisation de la commande "PHP" pour s'en servir.
Toute commande artisan débute donc par "php artisan".
La commande "php artisan" seule, affichera l'ensemble des commandes disponibles proposées par Artisan.

### Commandes usuelles
- Création de fichiers : Artisan nous permet de générer des fichiers a l'aide de la commande "make". On doit ensuite interposer le symbole ":", puis spécifier le type de fichier que l'on veut créer.
- gestion de la base de données : Artisan nous permet de créer, modifier ou supprimer des tables au sein d'une base de données. Il utilise les fichiers de migration, mais n'exécute chaque migration, que sur les fichiers qui n'ont pas déjà été migrés. Pour cela, il faut utiliser la commande "migrate".
- gestion du cache : Artisan nous permet de nettoyer le cache de manière rapide et simple avec la commande "cache:clear".
- Affichage des routes : Artisan nous permet d'afficher les routes existantes au sein de l'application avec la commande "route:list".
- publication des vendors : Artisan nous permet de publier les dépendances et librairies utilisées au sein d'un projet Laravel. Ceci nous permettant de modifier ces librairies et dépendances sans crainte de voir le travail perdue pour cause de mise à jour. la commande étant "vendor:publish"

## Architecture de Laravel
|- /app  
|----- /Console  
|--------- /Commands : Dossier qui contient toutes les commandes personnalisées créées.  
|----- /Exceptions  
|----- /Http  
|--------- /Controller : Dossier qui contiendra l'ensembe des controleurs  
|------------- controller.php : Controleur de base du framework  
|--------- /Middleware : Dossier qui contiendra l'ensemble des middleware  
|----- /Providers  
|----- User.php : Modèle utilisateur généré automatiquement par Laravel  
|- /bootstrap  
|- /config : Contient les fichiers de configuration de l'application  
|- /database  
|----- /migrations : Contient les fichiers de migrations qui permettent de créer, modifier ou   supprimer une ou plusieurs table(s)  
|- /public : dossier d'entrée de l'application  
|----- index.php : point d'entrée de l'application  
|- /ressources  
|----- /lang : dossier qui contient les fichiers de traductions de l'application  
|----- /views : dossier qui contient l'ensemble des vues du projet  
|- /routes  
|----- api.php : fichier pour déclarer les routes relatives à une API  
|----- web.php : fichier pour déclarer les routes relatives à une application web.  
|- /storage  
|- /tests : dossier contenant les tests unitaires & fonctionnels  
|- /vendor : Contient l'ensemble des dépendances du projet (géré par Composer)  
|- composer.json => le fichier qui permet de lister les dépendances  
|- .env => fichier de configuration de l'application  

## Etapes d'un CRUD
1. Création d'une table en base de données :
    - Création d'un ou plusieurs fichier(s) de migration avec la commande "php artisan make:migration [NOM_DU_FICHIER_DE_MIGRATION]"
    - Migration des fichiers grâce à la commande "php artisan migrate"
2. Création du modèle en lien avec la table créée en base de données :
    - Création du fichier avec la commande "php artisan make:model [NOM_DU_MODEL]"
    - Renseignement du nom de la table en lien avec le nouveau modèle grâce à l'attribut : "protected $table="[NOM_DE_LA_TABLE]";"
    - Renseignement des champs de la table qui peuvent être modifiés grâce au modèle via le tableau unidimensionnel contenu dans l'attribut "protected $fillable=[TABLEAU_DES_CHAMPS]"
3. Création d'une ou plusieurs route(s)
    - Ajout de la / des route(s) dans le fichier "/routes/web.php". Renseignement de l'URL attendue, du contrôleur ainsi que de sa méthode qui doit être appelée au matching de l'URL, puis définition d'un nom sur la route pour facilité son utilisation a posteriori.
4. Création du contrôleur
    - Création du fichier avec la commande "php artisan make:controller [NOM_DU_CONTROLLER]"
    - Définition de la / des méthode(s) en lien avec les routes précédemment créées
    - Penser à retourner les vues à l'issue de chaque méthode du controleur
5. Création des vues
    - Pour chaque vue nécessaire, créer un fichier avec l'extension ".blade.php" dans le dossier "/ressources/views/". Nommer ce fichier de telle sorte à pouvoir l'appeler simplement dans les méthodes des contrôleurs.


----------------------------------------------------------------------------------------
Notation :
1. QCM => COURS
2. Projet
    - GROUPE (non obligatoire : 4 maximum)
    - SUJET : Alternance & Bière
    - Alternance
        - BDD utilisateurs
        - BDD entreprises
        - BDD contacts (en lien avec les entreprises)
        - BDD demandes (créer des demandes)
        - BDD historique (en lien avec les demandes et trié par date)
        - Faire un système de badge par utilisateur, distingué par des bières, en fonction des recherches effectuées.
        - Le grand gagnant aura le droit de se faire payer une bière par le reste de la classe !
        
ORM / API : 
1. QCM
2. Projet
Se servir du projet Laravel pour réaliser une API qui va renvoyer les données suivantes : 
    2.1 Liste d'entreprises
    2.2 Détail d'une entreprise
    2.3 Détail d'un utilisateur et ses statistiques
        
