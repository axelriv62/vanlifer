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

Realized by [Axel](https://github.com/axelriv62), [Quentin](https://github.com/quentinltg), [Bylel](https://github.com/SirSweazzyyy), Loup, Anaelle, Lynoa et Tessia, second year students (promotion 24-25) of BUT Computer Science and BUT Multimedia and Internet Professions (MMI) at the IUT de Lens.

<br>

<p align="center">
  <img src="https://github.com/axelriv62/vanlifer/blob/main/resources/images/screenshot.png" alt="screenshot" width="800">
</p>

<br>

## Présentation

This project was realized as part of a third semester SAE ('Learning and Assessment Situation' in French) project of BUT Computer Science and BUT Multimedia and Internet Professions.

The context of this project was special as it was carried out in 36 hours as part of the 'Marathon du Web' organized by the both departments.

The subject was to design a web application allowing users to document their travels by publishing articles for each step. Users can share their travels, which others can then like and comment.

We chose to target van travelers, so they can tell their adventures across Europe and share their experiences.

<br>

## Objectifs

The Computer Science students were tasked with developing the back-end of the application in Laravel, implementing as many of the requested features as possible.

The Multimedia and Internet students were responsible for designing the graphic charter and mockups, as well as integrating the features according to these mockups. They also imagined an example trip to illustrate the application.

I also had another role as I was the development team leader, I was responsible for supervising the merge requests and ensuring the deployment of the application on a server machine within the IUT.

<br>

## Get the project

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

## Areas for Improvement

The project was realized in a very limited time, here are different elements that should be deepened.

* __Integration__ : Some pages have not been integrated into the rest of the application or not enough.
* __User Experience__ : Different features could be implemented to improve the user experience, such as sorts, filters and the search for a trip.
* __Security__ : The repository design pattern could be used for several of the application's models and would add a layer of security when manipulating the database.

<br>

## Languages, Tools and Software Used

![My Skills](https://go-skill-icons.vercel.app/api/icons?i=laravel,html,css,git,gitlab,figma&theme=dark)
