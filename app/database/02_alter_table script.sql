ALTER TABLE users add column
pernom varchar(10),
nom varchar(10);

ALTER TABLE tickets add constrain pk_tickets
 primary key(id);

ALTER TABLE tickets add foreign key
(id_auteur)reference users(id_user);

ALTER TABLE message add foreign key fk_message
(id_auteur)reference users(id);

ALTER TABLE ticket_message add foreign key fk_ticket_message
(id_ticket)reference tickets(id);

ALTER TABLE ticket_message add constrain
 pk_ticket_message primary key(id);

ALTER TABLE ticket_materiel add constrain
 primary key(id);

 ALTER TABLE ticket_materiel add foreign key
fk_ticket_materiel(id_materiel)reference idn(id);
