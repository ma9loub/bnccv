biznetcom
=========

* Symfony2 pour le framework PHP
* Utilise Bootstrap pour le style
* un projet TimeLine opensource pour la page du CV
* jQuery pour toute la partie JS
* modernizr pour la timeline
* handlebars pour du templating

# bnccv
BizNetCom CV. Un site pour présenter mon expérience et mon activité. vous pouvez disposer du code source et le réutiliser comme vous le souhaitez. Cela peut m'intéresser de voir ce que vous en faites, envoyez moi un mail à cle.balay@gmail.com.
BNCCV c'est :
* Une page de présentation générale
* Une page en mode TimeLine pour montrer son CV
* Une page avec des barres de progression pour montrer son expérience
* Une page A propos pour d'autres informations
* Une page de Contact

# Les données
Pour les données de la présentation générale, du CV et de l'expérience il y a une structure JSON à placer dans le dossier web/bundles/cv/ nommée toto.json
* Pour la donnée cv->type, Il existe 3 types d'expérience : 
  * picture (pour les voyages)
  * wrench (pour une exp professionnelle)
  * education (pour un diplôme)
* De plus, si vous le souhaitez vous pouvez placer votre CV dans web/bundles/cv/doc/cv_[nom_cv].doc et/ou web/bundles/cv/doc/cv_[nom_cv].pdf. Dans le cas contraire rien ne s'afichera.

```
{
  "home": {
    "title" : "...",
    "steps" : [
      "...",
      ...
    ]
  },
  "nom_cv" : "par ex si vous placez un cv nommé cv_toto.pdf dans web/bundles/cv/doc/, mettez ici cv_toto",
  "cv" : [
     {
        "title" : "...",
        "type" : "picture | wrench | education",
        "subtitle" : "...",
        "date" : "...",
        "photo_url" : "http://...",
        "caption" : "...",
        "data": {
          "body" : "...",
          "steps" : [...]
        },
        "more" : "http://..."
     },
     ...
  ],
  "experience" : [
    {
      "title" : "Java / J2ee",
      "modules" : [
        {
          "name" : "J2ee",
          "percent" : "90"
        },
        {
          "name" : "Hibernate",
          "percent" : "80"
        },
        ...
      ]
    },
    ...
  ]
}
```

# Installation
C'est un projet symfony qui utilise composer.phar pour gérer les dépendances du projet. Pour récupérer les dépendances, il faut tout d'abord récupérer le composer puis l'exécuter :
* curl -s https:/ /getcomposer.org/installer | php
** ou avec 1and1: curl -sS https://getcomposer.org/installer | /usr/bin/php5.5-cli
* php composer.phar install
** avec 1and1: /usr/bin/php5.5-cli composer.phar install

