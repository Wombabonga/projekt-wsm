/*
    SQL Datei 
    Datenbank für wsm
*/

CREATE TABLE IF NOT EXISTS 'Produkt' (
    'ProduktID' int(11) NOT NULL AUTO_INCREMENT,
    'Produktname' varchar(20) NOT NULL,
    'ProduktBeschreibung' text,
    'Bild' varchar(20) DEFAULT NULL,
    'Kategorie' varchar(20) DEFAULT NULL,
    'LagerBestand' int(4) DEFAULT NULL,
    'Preis' float(6,2) DEFAULT NULL,
    PRIMARY KEY ('ProduktID')
)
