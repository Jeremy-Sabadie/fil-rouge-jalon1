ALTER TABLE users add column
pernom varchar(10),
nom varchar(10);

ALTER TABLE tickets add constrain
 primary key(id);

ALTER TABLE tickets add foreign key
(id_auteur)reference users(id_user);

ALTER TABLE message add foreign key
(id_auteur)reference users(id);

ALTER TABLE ticket_message add foreign key
(id_ticket)reference tickets(id);

ALTER TABLE ticket_message add constrain
 primary key(id);

ALTER TABLE ticket_materiel add constrain
 primary key(id);

 ALTER TABLE ticket_materiel add foreign key
(id_materiel)reference idn(id);
