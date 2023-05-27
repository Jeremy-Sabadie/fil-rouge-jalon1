--After submitting and correcting any errors:
--corrected script:
CREATE TABLE if not exists ticket (
    id INT PRIMARY KEY AUTO_INCREMENT,
    sujet VARCHAR(20),
    id_status INT,
    id_type_panne INT,
    id_auteur INT,
    created_dat DATETIME,
          updated_dat DATETIME);













CREATE TABLE if not exists status (
    id INT,
    label VARCHAR(20)
    );


CREATE TABLE if not exists type_panne (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    label VARCHAR(20)
   );


CREATE TABLE if not exists ticket_materiel (
    id_ticket INT ,
    id_materiels INT
);
