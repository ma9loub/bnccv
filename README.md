biznetcom
=========

A Symfony project created on October 18, 2015, 10:04 am.

* Utilise Bootstrap pour le style sobre mais clair
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
Pour vos données du CV et d'expérience il y a une structure JSON à placer dans le dossier web/bundles/cv/ nommée toto.json
* Il existe 3 types d'expérience : 
  * picture (pour les voyages)
  * wrench (pour une exp professionnelle)
  * education (pour un diplôme)

```
{
  "cv" : [
     {
        "title" : "",
        "type" : "picture | wrench | education",
        "subtitle" : "",
        "date" : "",
        "photo_url" : "",
        "caption" : "",
        "data": {
          "body" : "",
          "steps" : [
            "step 1",
            "step 2",
            ...
         ]
        },
        "more" : "link to a website"
     },
     ...
  ],
  "exp" : [
    {
      "name" : "J2ee",
      "percent" : "80%"
    },
    ...
  ]
}
```
