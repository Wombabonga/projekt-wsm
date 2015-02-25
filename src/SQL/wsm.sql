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

INSERT INTO Produkt (ProduktName, Bild, Preis, Kategorie, LagerBestand, ProduktBeschreibung) VALUES
('Stock', 'stick', 1, 'Werkzeug', 5000, 'Basiselement für alle Werkzeuge Vielseitig einsetzbar'),
('Stein Axt', 'stone_axe', 5, 'Werkzeug', 1000, 'Werkzeug für die Tägliche Waldarbeit des Normalen Mannes'),
('Stein Hacke', 'stone_hoe', 4, 'Werkzeug', 1000, 'Ein muss für jeden Bauern'),
('Stein Spitzhacke', 'stone_pickaxe', 5, 'Werkzeug', 1000, ''),
('Stein Schaufel', 'stone_shovel', 4, 'Werkzeug', 500, ''),
('Holz Schaufel', 'wood_shovel', 2, 'Werkzeug', 500, ''),
('Holz Spitzhacke', 'wood_pickaxe', 3, 'Werkzeug', 500, ''),
('Holz Hacke', 'wood_hoe', 2, 'Werkzeug', 500, ''),
('Holz Axt', 'wood_axe', 3, 'Werkzeug', 1000, 'Werkzeug für die Tägliche Waldarbeit des Armen Mannes'),
('Diamant Axt', 'diamond_axe', 10, 'Werkzeug', 500, ''),
('Diamant Hacke', 'diamond_hoe', 8, 'Werkzeug', 500, ''),
('Diamant Schaufel', 'diamond_shovel', 8, 'Werkzeug', 500, ''),
('Diamant Spitzhacke', 'diamond_pickaxe', 10, 'Werkzeug', 500, ''),
('Diamant Schwert', 'diamond_sword', 15, 'Werkzeug', 500, ''),
('Diamant Schuhe', 'diamond_boots', 12, 'Rüstung', 500, ''),
('Diamant Brustpanzer', 'diamond_chestplate', 18, 'Rüstung', 500, ''),
('Diamant Helm', 'diamond_helmet', 12, 'Rüstung', 500, ''),
('Diamant Hose', 'diamond_leggings', 15, 'Rüstung', 500, '');

