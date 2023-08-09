
## Voiture

- Créer une entité `Car` avec quelques propriétés (nom du modèle et année de sortie).
- Créer une page qui affiche la liste des voitures, avec ses propriétés.
  - Ajouter des voitures à la main en BDD sinon la liste sera vide.
- Créer un formulaire pour ajouter une voiture.
  - Ajouter les contraintes de validation, les tester.
  - Rediriger vers la liste.
- Ajouter quelques modèles de voiture.
- Suppression d'une voiture en méthode HTTP POST.

## Marque

- Créer une entité `Brand`
- Relier les entités `Car` et `Brand`.
  - Une voiture n'appartient qu'à une seule marque.
  - Une marque peut avoir plusieurs voitures.
- Ajouter la relation au formulaire de création de voiture.
  - Ajouter des marques à la main en BDD sinon la liste sera vide.
- Afficher la marque dans la liste des voitures.

Si tout est OK et si nécessaire, faire en sorte qu'une voiture ne puisse pas exister sans marque associée (côté SQL ou côté Doctrine).

## A faire

- Créer le formulaire d'édition de voiture.
- Afficher les voitures par marque (lien sur une marque de voiture => affiche toutes les voitures de cette marque).
- Créer une requête custom avec jointure pour optimiser les requêtes de la liste des voitures.
- Créer des fixtures.
