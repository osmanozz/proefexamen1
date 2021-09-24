
CREATE DATABASE catchmorefish;
USE catchmorefish;

CREATE table amsterdam(
    productcode int AUTO_INCREMENT,
    naam varchar(255) NOT NULL,
    inkoop_waarde decimal(6,2) NOT NULL,
    verkoop_waarde decimal(6,2) NOT NULL,
    PRIMARY KEY (productcode)
);

CREATE TABLE medewerker(
    id INT AUTO_INCREMENT,
    naam varchar(255),
    username varchar(255) not null UNIQUE,
    password varchar(255) not null,
    PRIMARY KEY (id)
);


