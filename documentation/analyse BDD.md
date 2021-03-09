# Analyse

## Schéma 1

utilisateur

- id : clé primaire
- email : varchar, unique
- role: varchar ?
- mot_de_passe : varchar
- tel : varchar, nullable
- prenom : varchar, nullable
- nom : varchar, nullable
- adresse1 : text, nullable
- adresse2 : text, nullable
- localité : varchar, nullable
- code postal : varchar, nullable

categorie

- id : clé primaire
- nom : varchar
- categorie_id : clé étrangère, nullable

produit

- id : clé primaire
- nom : varchar
- description : text, nullable
- prix : float, 0 par défaut
- actif : boolean, true par défaut
- categorie_id : clé étrangère ! : relation many to one ou many to many ?
- marque_id : clé étrangère
- quantite : integer, 1 par défaut
- taille_vêtement_id : clé étrangère, M par défaut
- dimension_largeur : float, nullable
- dimension_longueur : float, nullable
- dimension_hauteur : float, nullable
- poids : float, nullable
- solde_pourcentage : integer, 0 par défaut

taille_vetement

- id : clé primaire
- nom : varchar

photo

- id : clé primaire
- image : varchar
- description : text, nullable
- ordre: integer, nullable
- produit_id : clé étrangère

marque

- id : clé primaire
- nom : varchar
- description : text, nullable

commande_entete

- id : clé primaire
- date_creation : date
- utilisateur_id : clé étrangère

commande_detail

- id : clé primaire
- commande_entete_id : clé étrangère
- produit_id : clé étrangère
- quantité : integer
- prix : float

## Schéma 2

categorie

- id : clé primaire
- nom : varchar

sous_categorie

- id : clé primaire
- nom : varchar
- categorie_id : clé étrangère

produit

- id : clé primaire
- nom : varchar
- description : text, nullable
- prix : float, 0 par défaut
- actif : boolean, true par défaut
- categorie_id : clé étrangère ! : relation many to one ou many to many ?
- sous_categorie_id : clé étrangère
- marque_id : clé étrangère
- quantite : integer, 1 par défaut
- dimension_largeur : float, nullable
- dimension_longueur : float, nullable
- dimension_hauteur : float, nullable
- poids : float, nullable
- solde_pourcentage : integer, 0 par défaut

...
