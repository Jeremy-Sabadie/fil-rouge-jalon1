ALTER TABLE users
ADD COLUMN prenom varchar(10),
ADD COLUMN nom varchar(10),
ADD CONSTRAINT pk_users PRIMARY KEY (id_user);

ALTER TABLE tickets
ADD CONSTRAINT pk_tickets PRIMARY KEY (id);

ALTER TABLE tickets
ADD FOREIGN KEY (id_auteur) REFERENCES users(id_user);

ALTER TABLE message
ADD CONSTRAINT fk_message FOREIGN KEY (id_auteur) REFERENCES users(id);

ALTER TABLE ticket_message
ADD CONSTRAINT fk_ticket_message FOREIGN KEY (id_ticket) REFERENCES tickets(id);

ALTER TABLE ticket_message
ADD CONSTRAINT pk_ticket_message PRIMARY KEY (id);

ALTER TABLE ticket_materiel
ADD CONSTRAINT fk_ticket_materiel FOREIGN KEY (id_materiel) REFERENCES idn(id);

