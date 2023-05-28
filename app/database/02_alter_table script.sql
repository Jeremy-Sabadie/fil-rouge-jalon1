ALTER TABLE users
DROP CONSTRAINT IF EXISTS pk_users;
--Ajout des colonnes prenm et tel à la table user créé par fortify:
 ALTER TABLE users
 ADD COLUMN prenom varchar(10),
- ADD COLUMN tel varchar(10);

-- Ajout de la clef étrangère id_ateur dans la table ticket correspondant à lacolonne id de la table uszers:
 ALTER TABLE ticket
-- ADD
  FOREIGN KEY (id_auteur) REFERENCES users(id);
-- Ajout d'une contrainte de clef primaire à la colonne id_message de la table messages:
ALTER TABLE messages
ADD constraint pk_id_messsage PRIMARY key(id_message);

-- Ajout de la clef étrangère id_auteur à la table messages elle correspond à la colonne id de la table users:
ALTER TABLE messages
add
 FOREIGN KEY (id_auteur) REFERENCES users(id);
--Ajout de la clef primaire id_ticket à la table ticket_message, elle correspond a la colonne id de la table ticket:
ALTER TABLE ticket_message
ADD CONSTRAINT fk_ticket_message FOREIGN KEY (id_ticket) REFERENCES tickets(id);
--Modification de la colonne id de la table ticket_message en clef primaire de la table:
ALTER TABLE ticket_message
ADD CONSTRAINT pk_ticket_message PRIMARY KEY (id);
--Ajout de la clef étrangère id_materiel à la table ticket_materiel, elle fera référence à l'id de la table


ALTER TABLE ticket_message
ADD  FOREIGN KEY (id_ticket) REFERENCES ticket(id);

--généré avec l'nterface graphique de dbeaver:
ALTER TABLE filrouge.ticket_message
ADD CONSTRAINT ticket_message_FK_1
FOREIGN KEY (id_message) REFERENCES filrouge.messages(id_message);

