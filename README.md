# Annuaire des plateformes OpenData du Togo
Ce repository contiendra les propositions de tout le monde.
## Les propositions seront organisées comme suit:
- Pour poster une poposition, il faut faire le clone du projet et y ajouter sa proposition.
- Chaque proposition doit se trouver dans un dossier portant le nom ou ID de la personne qui fait la proposition
- Ensuite faire une push
- publier l'information selon laquelle une nouvelle proposition est faire dans la groupe @opendata.tg 

## Caractéristique de la plateforme
Suite aux proposition, celle de @gausoft a été retenu.
La plateforme sera développée en PHP avec Symfony version 4
### Voici les classe de notre modèle:
- Classe apropos (titre, description)
- Classe equipe (nom, prenom, fonction, twitter, facebook, instagram, photo)
- Classe banniere (titre, image) 
- Classe newsletter (email)
- Classe faq (question, réponse)

### les mails
ils seront envoyés directement à une adresse qu'on créera à cet éffet , exemple (contact@opendata.tg)
la plateforme ne stockera pas les mails.

### la newsletter
Les mails seront stockés dans une table. Ensuite on les exportera vers l'application qui sera chargée d'envoyer les mails.

