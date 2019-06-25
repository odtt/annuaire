### Description des classes
 
### Les données d'informations
Ces classes décrivent la structure de la base de données de l'annuaire.

| Classe | Champs | Description |
| -------- | ----------- | --------------- |
| a_propos | titre, description | sera utilisée pour remplir la section [A propos] sur le template |
| temoignage | id, nom_utilisateur, fonction, image, temoignage | permettra de repertorié les témoignages et des les affichées dans la section [témoignages] |
| faq | id, question, reponse | permettra de remplir la sesction [faq] |
| Equipe | nom, prenom , image, liens (facebook, twitter ...) | permettra de données les informations sur [les menbres de l'équipe] |
| Partenaires | id, logo ,nom | contiendras les informations qui remplirons la sections [partenaires] |
| New letters |id, email | contiendras la listes des addresses email aux quels doivent être envoyer des newletters |

### Les données utilisée dans le cadre de l'implémentation
Ces données pourront être utilisées dans l'implementation de plate-forme.

| Classe | Champs | Description |
| -------- | ----------- | --------------- |
| Plateforme | id , nom, logo, descriptions, url | contiendra les informations relatifs aux autres plate-forme de données libres |
| Jeu de données | id, nom, description, url, date_ de _publication | contiendra des informations relatifs au jeu de données publiées par chaques plateforme |
| format des données | id, nom | contiendra le type de format au quel le jeu de données est disponnible |
| type de plate-forme | id, libellé, description | contiendra les informations relatifs à la catégorie de données qu'on peut retrouver sur une plate-forme (agricole, santé, etc) |

Le type de plate-forme servira aussi de donnés d'informations pour la section [plateformes]

![alt text](http://url/to/img.png)

