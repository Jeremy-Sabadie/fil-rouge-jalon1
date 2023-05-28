ALTER TABLE users
DROP CONSTRAINT IF EXISTS pk_users;

-- ALTER TABLE users
-- ADD COLUMN prenom varchar(10),
-- ADD COLUMN tel varchar(10);


-- ALTER TABLE ticket
-- ADD
--  FOREIGN KEY (id_auteur) REFERENCES users(id);

-- ALTER TABLE messages
-- ADD constraint pk_id_messsage PRIMARY key(id_message);

ALTER TABLE messages
ADD CONSTRAINT fk_message FOREIGN KEY (id_auteur) REFERENCES users(id);
ALTER TABLE messages
add
 FOREIGN KEY (id_auteur) REFERENCES users(id);

ALTER TABLE ticket_message
ADD CONSTRAINT fk_ticket_message FOREIGN KEY (id_ticket) REFERENCES tickets(id);

ALTER TABLE ticket_message
ADD CONSTRAINT pk_ticket_message PRIMARY KEY (id);

ALTER TABLE ticket_materiel
ADD CONSTRAINT fk_ticket_materiel FOREIGN KEY (id_materiel) REFERENCES idn(id);

ALTER TABLE ticket_message
ADD  FOREIGN KEY (id_ticket) REFERENCES ticket(id);

--généré avec l'nterface graphique de dbeaver:
ALTER TABLE filrouge.ticket_message
ADD CONSTRAINT ticket_message_FK_1
FOREIGN KEY (id_message) REFERENCES filrouge.messages(id_message);

