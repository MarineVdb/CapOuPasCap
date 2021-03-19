-- ce fichier de fixtures doit être importé après tous les autres

-- mot_de_passe : vide
-- email : nom de domaine

-- le mot de passe hashé a été généré avec :
--  echo password_hash('123', PASSWORD_DEFAULT);

UPDATE utilisateur
SET mot_de_passe = '$2y$10$na18nM.32zO2pp8PnMZR9ug62MXNNeMkwzb3AsAQdVzn/vlMvM.XS';
