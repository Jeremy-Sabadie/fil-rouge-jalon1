ALTER TABLE users
DROP CONSTRAINT IF EXISTS pk_users;
--Ajout des colonnes prenom et tel à la table user créé par fortify:
 ALTER TABLE users
 ADD COLUMN prenom varchar(10),
- ADD COLUMN tel varchar(10);
ALTER TABLE users
DROP CONSTRAINT IF EXISTS pk_users;
--Ajout de la colonne role:
 ALTER TABLE users
 ADD COLUMN role varchar(10);

-- Ajout de la clef étrangère id_ateur dans la table ticket correspondant à lacolonne id de la table uszers:
 ALTER TABLE ticket
-- ADD
  FOREIGN KEY (id_auteur) REFERENCES users(id);
-- Ajout d'une contrainte de clef primaire à la colonne id_message de la table messages:
--ALTER TABLE messages
--ADD constraint pk_id_messsage PRIMARY key(id_message);

-- Ajout de la clef étrangère id_auteur à la table messages elle correspond à la colonne id de la table users:
ALTER TABLE messages
add
 FOREIGN KEY (id_auteur) REFERENCES users(id);
--Ajout de la clef primaire id_ticket à la table ticket_message, elle correspond a la colonne id de la table ticket:
ALTER TABLE ticket_message
ADD CONSTRAINT fk_ticket_message FOREIGN KEY (id_ticket) REFERENCES tickets(id);
--Ajout de la clef étrangère id_status dan la table ticket qui
--pointe l'id de la table status:
ALTER TABLE ticket
ADD CONSTRAINT fk_ticket_status
FOREIGN KEY (id_status) REFERENCES status(id);
--Modification de la colonne id de la table ticket_message en clef primaire de la table:
--ALTER TABLE ticket_message
--ADD CONSTRAINT pk_ticket_message PRIMARY KEY (id);
--Ajout de la clef étrangère id_materiel à la table ticket_materiel, elle fera référence à l'id de la table


ALTER TABLE ticket_message
ADD  FOREIGN KEY (id_ticket) REFERENCES ticket(id);

--généré avec l'nterface graphique de dbeaver:
ALTER TABLE filrouge.ticket_message
ADD CONSTRAINT ticket_message_FK_1
FOREIGN KEY (id_message) REFERENCES filrouge.messages(id_message);

ALTER TABLE filrouge.messages
ADD CONSTRAINT
FOREIGN KEY(id_auteur) REFERENCES filrouge.users(id);
--add forein key on ticket table for id_status reference id of the status table:
ALTER TABLE filrouge.ticket
ADD CONSTRAINT
FOREIGN KEY(id_status) REFERENCES filrouge.status(id);

-- INSERT Jeu d'essai
INSERT INTO `messages` VALUES (1,'test',1,'2024-06-01 00:00:00'),(2,'test2',1,'2002-03-26 00:00:00'),(3,'test3',1,'2003-02-26 00:00:00'),(4,'test4',1,'2026-03-20 00:00:00');

INSERT INTO `ticket` VALUES (1,'ticket du dimanche',NULL,NULL,NULL,'2023-05-28 13:56:22',NULL),(2,'ticket du dimanche',NULL,NULL,NULL,'2023-05-28 13:58:04',NULL),(3,'ticket du dimanche',NULL,NULL,NULL,'2023-05-28 13:59:17',NULL),(4,'ticket du dimanche',NULL,NULL,NULL,'2023-05-28 14:00:40',NULL),(5,'ticket du dimanche',NULL,NULL,NULL,'2023-05-28 20:12:11',NULL),(6,'ticket du dimanche2',NULL,NULL,NULL,'2023-05-28 20:12:42',NULL),(7,'ticket du lundi',NULL,NULL,NULL,'2023-05-29 05:53:51',NULL),(8,'new test',NULL,NULL,NULL,'2023-05-29 05:59:53',NULL),(9,'test 29/05',NULL,NULL,NULL,'2023-05-29 14:35:19',NULL),(10,'test_ticket: 300523',NULL,NULL,NULL,'2023-05-30 07:26:30',NULL),(11,'tickets test',NULL,NULL,NULL,'2023-05-30 09:29:12',NULL),(12,'ticket test',NULL,NULL,NULL,'2023-05-30 12:57:22',NULL),(13,'Test',NULL,NULL,NULL,'2023-05-31 06:13:48',NULL),(14,'test 28000',NULL,NULL,NULL,'2023-05-31 07:11:07',NULL),(15,'réclamation',NULL,NULL,NULL,'2023-05-31 12:26:58',NULL),(16,'Test',NULL,NULL,NULL,'2023-06-01 18:47:24',NULL);

INSERT INTO `ticket_message` VALUES (1,1),(2,1),(3,1),(4,4);

INSERT INTO `users` VALUES (1,'new_user','sabadie.titi@gmail.com',NULL,'$2y$10$dU58A1qEW4pTBbyeUoOP6usPDrB6Jh3Ds/4906huT4BYvH7ulu9my',NULL,NULL,NULL,'2023-05-28 12:17:09','2023-05-28 12:17:09',NULL,NULL),(2,'user_name_2','sabadie.tutu@gmail.com',NULL,'$2y$10$iv8AxsgbKtZPABvmWYatMOPEmV2C5OP7QzwmL09y0Hcw0RxM0Jxm6',NULL,NULL,NULL,'2023-05-28 14:34:52','2023-05-28 14:34:52',NULL,NULL),(3,'user name 30.05.23','sabadie.tyty@gmail.com',NULL,'$2y$10$73hVJ6UqIUbNvhM9YKkzu.TlZeta7.59kwKYQXv8/CHCSBcPUjoa6',NULL,NULL,NULL,'2023-05-30 05:13:45','2023-05-30 05:13:45',NULL,NULL),(4,'Sabadie','sabadie.jeremy@gmail.com',NULL,'$2y$10$PiH5q.5B.U1/y4.XX80TO.tDPkFtUatxjKDvOA/VT.MUBxMyZal8K',NULL,NULL,NULL,'2023-05-31 10:24:56','2023-05-31 10:24:56',NULL,NULL);
