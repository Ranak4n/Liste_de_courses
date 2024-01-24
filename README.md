# Liste de Courses - Campus Saint-Félix La Salle

Ce projet est une application web de gestion de listes de courses développée par le Campus Saint-Félix La Salle. Elle permet aux utilisateurs de créer et gérer des listes de courses, d'ajouter des produits par catégorie et de les marquer lorsqu'ils sont ajoutés au panier.

## Fonctionnalités

- Création et gestion de listes de courses personnalisées
- Ajout de produits aux listes avec des détails comme la quantité et la marque
- Catégorisation des produits par zones (Fruits et légumes, Boulangerie, etc.)
- Marquage des produits lorsqu'ils sont ajoutés au panier

## Technologies Utilisées

- Symfony 7.0.1
- Bootstrap 5 pour le front-end
- Doctrine pour l'interaction avec la base de données
- MySQL pour la base de données (WAMP Server)

## Installation

Pour mettre en place le projet sur votre machine locale pour le développement et les tests, suivez les étapes ci-dessous :

1. Clonez le dépôt sur votre machine :

   https://github.com/Ranak4n/Liste_de_courses.git

   Installez les dépendances Composer : composer install

2. Configurez votre fichier .env avec vos informations de base de données.

3. Créez la base de données si elle n'existe pas déjà : 
    php bin/console doctrine:database:create

4. Exécutez les migrations pour créer les tables nécessaires : 
    php bin/console doctrine:migrations:migrate

### (Optionnel) Chargez les fixtures pour avoir un jeu de données de départ : 
    php bin/console doctrine:fixtures:load

5. Lancez le serveur de développement : 
    symfony server:start

    Visitez http://localhost:8000 dans votre navigateur web pour voir l'application en action.

## Contribution

Les pull requests sont les bienvenues. Pour les changements majeurs, veuillez ouvrir une issue d'abord pour discuter de ce que vous aimeriez changer.
Veuillez vous assurer de mettre à jour les tests si nécessaire.