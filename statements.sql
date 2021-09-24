
CREATE DATABASE catchmorefish;
USE catchmorefish;

CREATE TABLE medewerker(
    id INT AUTO_INCREMENT,
    naam varchar(255),
    username varchar(255) not null UNIQUE,
    password varchar(255) not null,
    PRIMARY KEY (id)
);
CREATE table amsterdam(
    id_ams int AUTO_INCREMENT,
    naam varchar(255) NOT NULL,
    prijs_per_stuk decimal(6,2) NOT NULL,
    voorraad int(10),
    PRIMARY KEY (id_ams)
);
CREATE table rotterdam(
    id_rot INT AUTO_INCREMENT,
    naam varchar(255) NOT NULL,
    prijs_per_stuk decimal(6,2) NOT NULL,
    voorraad int(10),
    PRIMARY KEY (id_rot)
);
CREATE table zoetermeer(
    id_zoeter INT AUTO_INCREMENT,
    naam varchar(255) NOT NULL,
    prijs_per_stuk decimal(6,2) NOT NULL,
    voorraad int(10),
    PRIMARY KEY (id_zoeter)
);

