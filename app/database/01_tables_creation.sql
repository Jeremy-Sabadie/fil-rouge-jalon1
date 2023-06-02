-- création de la base de données

CREATE DATABASE if not exists filrouge;
USE filrouge;
--03 création de la table "Ticket" pour les tickets:
CREATE TABLE if not exists ticket (
    id INT PRIMARY KEY AUTO_INCREMENT,
    sujet VARCHAR(20),
    id_status INT,
    id_type_panne INT,
    id_auteur INT,--forein key reference user(id),
    created_dat DATETIME,
    updated_dat DATETIME
    );



--01 création de la table ".Messages" pour les messages
CREATE TABLE messages (
    id_message INT PRIMARY KEY AUTO_INCREMENT,
    content TEXT(255),
    id_auteur INT,--forein key reference user(id),
    created_dat DATETIME
    );


--02création de la table ".TicketsMessage" pour les messages des tickets:
CREATE TABLE ticket_message (
    id_message INT,--forein key
    id_ticket INT--forein key
    );

--04 création de la table "Status" pour les status:
CREATE TABLE status (
    id INT PRIMARY KEY AUTO_INCREMENT,--primary key
    label VARCHAR(20)
    );

--05 création de la table ".TypePanne" pour gérer les différents types de pannes:
CREATE TABLE type_panne (
    id INT PRIMARY KEY AUTO_INCREMENT,--primary key
    label VARCHAR(20)
    );

--06 création de la table "TicketMateriel" pour gérer les différents matériels:
CREATE TABLE ticket_materiel (
    id_ticket INT ,--forein key
    id_materiels INT--forein key
    );
