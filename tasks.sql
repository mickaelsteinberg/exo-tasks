CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

INSERT INTO tasks (title, description, status, created_at, updated_at) VALUES
('Acheter du pain', 'Aller à la boulangerie pour acheter du pain frais.', 'en cours', NOW(), NOW()),
('Réviser le cours de PHP', 'Relire les notions de MVC et DAO pour le prochain projet.', 'en cours', NOW(), NOW()),
('Faire du sport', 'Session de musculation de 45 minutes.', 'terminée', NOW(), NOW()),
('Envoyer un e-mail au client', 'Répondre au client concernant la demande de devis.', 'en cours', NOW(), NOW()),
('Préparer le dîner', 'Faire une recette à base de légumes et de poulet.', 'en cours', NOW(), NOW()),
('Regarder un film', 'Regarder un film de science-fiction ce soir.', 'terminée', NOW(), NOW());
