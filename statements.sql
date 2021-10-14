
CREATE DATABASE morefish;
USE morefish;

CREATE TABLE overzicht (
    overzicht_id INTEGER AUTO_INCREMENT NOT NULL,
    datum date,
    eind_totaal decimal(6,2),
    PRIMARY KEY (overzicht_id)
);

CREATE TABLE product(
    product_id INTEGER AUTO_INCREMENT NOT NULL,
    product_naam varchar(255) NOT NULL,
    type varchar(255) NOT NULL,
    fabriek varchar(255) NOT NULL,
    waarde_inkoop decimal(6,2) NOT NULL,
    waarde_verkoop decimal(6,2) NOT NULL,
    PRIMARY KEY (product_id)
);
CREATE TABLE filiaal(
    filiaal_id int AUTO_INCREMENT NOT NULL,
    filiaal_naam varchar(255) NOT NULL,
    product_id int,
    aantal_product int NOT NULL,
    PRIMARY KEY (filiaal_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id) ON DELETE CASCADE
);
CREATE TABLE bestellijst(
    lijst_id INTEGER AUTO_INCREMENT NOT NULL,
    product_id INTEGER,
    filiaal_id INTEGER,
    datum date,
    leverancier varchar(255),
    min_aantal INTEGER NOT NULL,
    aantal_te_bestellen INTEGER NOT NULL,
    PRIMARY KEY (lijst_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id) ON DELETE CASCADE,
    FOREIGN KEY (filiaal_id) REFERENCES filiaal(filiaal_id) ON DELETE CASCADE
);

CREATE TABLE medewerker(
    id INT AUTO_INCREMENT,
    username varchar(255) not null UNIQUE,
    password varchar(255) not null,
    PRIMARY KEY (id)
);


