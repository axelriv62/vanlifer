 <h1 align="center">
  <br>
  <img src="https://github.com/axelriv62/vanlifer/blob/main/resources/images/logo_blanc.png" width="200">
  <br>
  <b>Vanlifer</b>
  <br>
  <a href="https://github.com/axelriv62/vanlifer/blob/main/README.md">
    <img src="https://img.shields.io/badge/README-FR-blue">
  </a>
  <a href="https://github.com/axelriv62/vanlifer/blob/main/README-EN.md">
    <img src="https://img.shields.io/badge/README-EN-blue">
  </a>
</h1>

<br>

*Réalisé par [Axel](https://github.com/axelriv62), [Quentin](https://github.com/quentinltg), [Bylel](https://github.com/SirSweazzyyy), Loup, Anaelle, Lynoa et Tessia, étudiants de deuxième année (promotion 24-25) de BUT Informatique et de BUT MMI au sein de l'IUT de Lens.*

<br>

<p align="center">
  <img src="https://github.com/axelriv62/vanlifer/blob/main/resources/images/screenshot.png" alt="screenshot" width="800">
</p>

<br>

## Présentation

Ce projet a été réalisé dans le cadre d'un projet de SAE (Situation d'Apprenstissage et d'Évalution) de troisème semestre de BUT Informatique et de BUT MMI.

Le contexte de ce projet a été spécial puisqu'il a été réalisé en 36h dans le cadre du 'Marathon du Web' organisé par le département informatique et le département MMI de l'IUT de Lens.

Le sujet était de concevoir une application web permettant aux utilisateurs de documenter leurs voyages en publiant des articles pour chaque étape. Les utilisateurs peuvent partager leurs voyages, que d'autres peuvent ensuite liker et commenter.

Nous avons choisi de cibler les voyageurs en van, afin qu'ils puissent raconter leurs aventures à travers l'Europe et partager leurs expériences.

<br>

## Objectifs

Les étudiants Informatique avait pour mission de développer la partie back-end de l'application en Laravel, en implémentant un maximum des fonctionnalités demandées.
De leurs coté, les étudiants MMI se sont chargée de la conception de la charte graphique et des maquettes, ainsi que de l'intégration des fonctionnalités selon ces maquettes. Ils ont également imaginé un voyage d'exemple pour illustrer l'application.

J'ai eu également un autre rôle puisque j'ai été le responsable de l'équipe développement, j'ai eu pour mission de superviser les merge requests et d'assurer le déploiement de l'application sur une machine serveur au sein de l'IUT.

<br>

## Récupérer le projet

```shell
git clone https://github.com/axelriv62/vanlifer.git

cd vanlifer
composer install
npm install
cp .env.example .env

php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed
cp -r resources/images storage/app/public/images
npm run build

php artisan serve
```

<br>

## Pistes d’Amélioration

Le projet ayant été réalisé dans un temps très limité, voici différents éléments qui devraient être approfondis.

+ __Intégration__ : Certaines pages n'ont pas ou pas assez été intégré au reste de l'application.
* __Expérience utilisateur__ : Différentes fonctionnalités pourrait être implémentées pour améliorer l'expérience utilisateur, par exemple des tris, des filtres et la recherche d'un voyage.
* __Sécurité__ : Le patron de conception répository pourrait être utilisé pour plusieurs des modèles de l'application et permetterait d'ajouter une couche de sécurité lors la manipulation de la base de données.

<br>

## Langages, Outils et Logiciels Utilisés

![My Skills](https://go-skill-icons.vercel.app/api/icons?i=laravel,html,css,git,gitlab,figma&theme=dark)
