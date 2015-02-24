/*
    SQL Datei 
    Datenbank für wsm
*/

CREATE TABLE IF NOT EXISTS Produkt (
    ProduktID int(11) NOT NULL AUTO_INCREMENT,
    ProduktName varchar(20) NOT NULL,
    ProduktBeschreibung text,
    Bild varchar(20) DEFAULT NULL,
    Kategorie varchar(20) DEFAULT NULL,
    LagerBestand int(4) DEFAULT NULL,
    Preis float(6,2) DEFAULT NULL,
    PRIMARY KEY (ProduktID)
);

INSERT INTO Produkt (ProduktName, Bild, Preis) VALUES
('Stock', 'stick', 2.5),
('Stein Axt', 'stone_axe', 3.5),
('Stein Hacke', 'stone_hoe', 4.5),
('Stein Spietzhacke', 'stone_pickaxe', 5.5),
('Holz Axt', 'wood_axe', 1.5);
