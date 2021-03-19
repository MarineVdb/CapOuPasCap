-- ce fichier de fixtures doit être importé avant tous les autres

INSERT INTO utilisateur
(utilisateur_id, prenom, nom, email, role, mot_de_passe, tel, adresse1, adresse2, localite, code_postal)
values
(1, 'Admin', 'Admin', 'admin@example.com', 'administrateur', '123', null, null, null, null, null);
