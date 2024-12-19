## Version initiale

Pour lancer avec succès une première version du site web, il faut exécuter les commandes suivantes :

```shell
# A partir de la racine de votre projet

# installation des dépendances
composer install 

# installation des outils pour la construction du front
npm install 
# Modification du front en cours de développement
npm run dev
# Construction du front pour la version exploitation
npm run build

# liaison avec le SGBD et la base de données utilisée
cp .env.example .env


#########################################################
#
# Ici il faut modifier en particulier les variables suivantes
#
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=marathon_24
# DB_USERNAME=root
# DB_PASSWORD=
#
#
#########################################################

# Génération de la clé initiale

php artisan key:generate

# génération des tables dans votre base de données

php artisan migrate

# ou pour ré-initialiser

php artisan migrate:fresh

# Initialisation des données de départ

cp -r resources/images storage/app/public

# Création du lien physique en storage/app/public et public/storage

php artisan storage:link

# Ajout de données aléatoire dans les tables de la base de données

php artisan db:seed

# Lancement de l'application web pour le développement

php artisan serve
