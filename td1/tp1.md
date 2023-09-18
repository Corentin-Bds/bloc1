**TD n°1**

# Exercice 1 :

## La méthode GET (source : https://www.maxicours.com/se/cours/la-transmission-d-un-formulaire-avec-get-ou-post/) :

La méthode GET passe les réponses de l’utilisateur par l’URL. 
Cette méthode est donc limitée par la taille limite d’une URL et les données sensibles sont accessibles à tous, ce qui n’est pas sécurisé.

## La méthode POST (source : https://www.maxicours.com/se/cours/la-transmission-d-un-formulaire-avec-get-ou-post/) : 

La méthode GET possède les données saisies par l'utilisateur, celle-ci ne sont plus passés dans l'URL, mais dans la requête elle même
Cette méthode n'a pas de limites de taille et les données ne sont pas visibles par les autres. Cependant, celle-ci ne sont pas protégées si le protocole HTTPS n'est pas utilisé


|   | GET          | POST |
| :--------------- |:---------------:| -----:|
| Taille  |   Limité        |  Pas de limites |
| Utilisation  | Plus simple d'utilisation | Plus compliqué car doit passer par une requête |
| Sécurité  | Moins sécurisé | Plus sécurisé |
