# Test 
## Repo git :  Simon BDBC

### Failles trouvées
- Pas de systèmes d'authentification utilisateur, on peut voir tous les éléments en modifiant seulement l'id et on peut aussi les modifier même si on est pas lep ropriétaire de l'élément.
-  Attaque XSS (ajout de JS dans les éléments).

NB : J'ai voulu essayé de hasher le fichier json avec une attaque XSS pour que les données deviennent inutilisables.