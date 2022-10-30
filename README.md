# ECF DECEMBRE 2022

## MANUEL DE DEPLOIEMENT EN LOCAL

1. Installer Xampp  
2. Dans Xampp, créer le dossier apps  
3. Cloner le projet ecf dans le dossier apps avec la commande git clone  
4. Utiliser la commande 'composer install' (si des fichiers manquent, se documenter pour récupérer les fichiers 
manquants)  
5. Configurer le serveur dans le fichier xampp > apache > conf > extra > httpd-vhosts.conf de la manière suivante :  
```  
<VirtualHost *:80>   
    ServerName ecf.localhost

    DocumentRoot "C:/xampp/apps/ecf/public"
    DirectoryIndex index.php

    <Directory "C:/xampp/apps/ecf/public">
        Require all granted

        FallbackResource /index.php
    </Directory>
</VirtualHost>
```
6. Dans le fichier .env du projet, configurer un MAILER_DSN avec une clé Sendinblue
```
MAILER_DSN=sendinblue+api://VOTRECLE@default  
```
7. Toujours dans le fichier .env, configurer la base de données à utiliser 
```
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"
```
9. Importez dans votre base de données le fichier ecf.sql (trouvable sur le dépôt github) pour créer et remplir les 
   tables
10. Accéder au site à l'adresse ecf.localhost sur votre navigateur

***

## MANUEL D'UTILISATION

1. Une fois sur l'application, en local ou à l'adresse https://calm-chamber-87404.herokuapp.com/, se connecter à 
   l'aide d'un des identifiants suivants :
   1. Compte employé de la marque ('ROLE_ADMIN') :
    - Adresse mail : test@test.fr
    - Mot de passe : password
   2. Compte franchisé ('ROLE_CLIENT') :
    - Adresse mail : test2@test.fr
    - Mot de passe : password
   3. Compte structure ('ROLE_BRANCH') :
    - Adresse mail : branch7@test.fr
    - Mot de passe : password
2. Sur la page de la liste des franchises, cliquer sur "gérer les clubs" de la franchise choisie pour afficher la 
   page de la franchise avec la
   liste de ses structures
3. Pour créer un nouveau contrat pour l'une des structures de cette franchise, cliquer sur "ouvrir l'accès à un 
   nouveau club". Vous pouvez tester de créer un nouveau contrat à la structure "Ancre de Lune" (identifiant 20) du 
   franchisé Trilport.
4. Toujours sur la page de la franchise et de ses structures, cliquer plus "plus d'informations" afin d'accéder à 
   toutes les informations de la structure (contacts, description longue, adresses de ses structures, etc.)