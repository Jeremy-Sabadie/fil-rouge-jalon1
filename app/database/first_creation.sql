-- création de la base de données

CREATE DATABASE if not exists amio;
USE amio;
--03 création de la table "Ticket" pour les tickets:
CREATE TABLE if not exists ticket (
    id INT PRIMARY KEY AUTO_INCREMENT,
    sujet VARCHAR(20),
    id_status INT,
    id_type_panne INT,
    id_auteur INT,
    created_dat DATETIME,
          updated_dat DATETIME);



--01 création de la table ".Messages" pour les messages
CREATE TABLE messages (
    id_message INT
    content TEXT(255),
    id_auteur INT,
    created_dat DATETIME);


--02création de la table ".TicketsMessage" pour les messages des tickets:
CREATE TABLE ticket_message (
    id_message INT,
    id_ticket INT);



--04 création de la table "Status" pour les status:
CREATE TABLE status (
    id INT,
    label VARCHAR(20)
    );

--05 création de la table ".TypePanne" pour gérer les différents types de pannes:
CREATE TABLE type_panne (
    id INT AUTO_INCREMENT,
    label VARCHAR(20),
    );

--06 création de la table "TicketMateriel" pour gérer les différents matériels:
CREATE TABLE ticket_materiel (
    id_ticket INT ,
    id_materiels INT,
    );
