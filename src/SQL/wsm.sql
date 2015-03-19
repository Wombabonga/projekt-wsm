/*
    SQL Datei 
    Datenbank für wsm
*/

-- Löscht die Datenbank falls Sie schon existiert --
DROP DATABASE IF EXISTS wsm;

-- Erstellt eine neua datenbank --
create database wsm;

-- script soll mit der wsm datenbank arbeiten --
use wsm;

-- Erstellt die Tabelle Produkt--
CREATE TABLE IF NOT EXISTS Produkt (
    ProduktID int(11) NOT NULL AUTO_INCREMENT,
    ProduktName varchar(20) NOT NULL,
    ProduktBeschreibung text,
    kategorieID int(11),
    Bild varchar(20) DEFAULT NULL,
    Preis float(6,2) DEFAULT NULL,
    PRIMARY KEY (ProduktID)
)ENGINE=INNODB;

-- CHARACTER SET utf8 COLLATE utf8_general_ci; --

-- Fügt der Tabelle Produkt eine vielzahl von datensätzen hinzu--
INSERT INTO Produkt (ProduktName, Bild, Preis, KategorieID, ProduktBeschreibung) VALUES
('Stock', 'stick', 1, 1,  'Basiselement für alle Werkzeuge Vielseitig einsetzbar'),
('Stein Axt', 'stone_axe', 5, 1,  'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Stein Hacke', 'stone_hoe', 4, 1,  'Wird verwendet, um Erd- und Grasblöckee umzugraben und sie damit fürs Bepflanzen vorzubereiten'),
('Stein Spitzhacke', 'stone_pickaxe', 5, 1,  'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Stein Schaufel', 'stone_shovel', 4, 1, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Holz Schaufel', 'wood_shovel', 2, 1, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Holz Spitzhacke', 'wood_pickaxe', 3, 1, 'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Holz Hacke', 'wood_hoe', 2, 1, 'Wird verwendet, um Erd- und Grasblöckee umzugraben und sie damit fürs Bepflanzen vorzubereiten'),
('Holz Axt', 'wood_axe', 3, 1, 'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Diamant Axt', 'diamond_axe', 10, 1, 'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Diamant Hacke', 'diamond_hoe', 8, 1,'Wird verwendet, um Erd- und Grasblöckee umzugraben und sie damit fürs Bepflanzen vorzubereiten'),
('Diamant Schaufel', 'diamond_shovel', 8, 1, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Diamant Spitzhacke', 'diamond_pickaxe', 10, 1, 'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Diamant Schwert', 'diamond_sword', 15, 2, 'Wird zum kämpfen verwendet (+7 Angriffsschaden)'),
('Diamant Schuhe', 'diamond_boots', 12, 3, 'Verleiht dem Träger +3 Rüstungspunkte'),
('Diamant Brustpanzer', 'diamond_chestplate', 18, 3, 'Verleiht dem Träger 8 Rüstungspunkte'),
('Diamant Helm', 'diamond_helmet', 12, 3, 'Verleiht dem Träger +3 Rüstungspunkte'),
('Apfel', 'apple', 3, 4, 'Regeneriert 2 Leben'),
('Goldener Apfel', 'apple_golden', 6, 4, 'Regeneriert 2 Leben und regeneriert Leben für 4 Sekunden'),
('Pfeil', 'arrow', 1, 2, 'Wird als Munition für Bogen verwendet'),
('Steak', 'beef_cooked', 5, 4, 'Regeneriert 4 Leben'),
('Bogen', 'bow_standby', 10, 2, 'Erlaubt Fernangriffe mit Pfeilen'),
('Brot', 'bread', 5, 4, 'Regeneriert 2,5 Leben'),
('Keks', 'cookie', 4, 4, 'Regeneriert 1 Leben'),
('Backfisch', 'fish_cod_cooked', 5, 4, 'Regeneriert 2,5 Leben'),
('Eisenaxt', 'iron_axe', 12, 2, 'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Eisenstiefel', 'iron_boots', 12, 3, 'Verleiht dem Träger 2 Rüstungspunkte'),
('Eisen Brustpanzer', 'iron_chestplate', 12, 3, 'Verleiht dem Träger 6 Rüstungspunkte'),
('Eisen Spitzhacke', 'iron_pickaxe', 12, 1, 'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Eisen Schaufel', 'iron_shovel', 12, 1, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Eisen Schwert', 'iron_sword', 12, 2, 'Wird zum kämpfen verwendet (+6 Angriffsschaden)'),
('Wassermelone', 'melon', 12, 4, 'Regeneriert 1 Leben'),
('Kartoffel', 'potato_baked', 12, 4, 'Regeneriert 0,5 Leben'),
('Kürbiskuchen', 'pumpkin_pie', 12, 4, 'Regeneriert 1,5 Leben'),
('Creeper Hut', 'skull_creeper', 12, 3, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Skelet Hut', 'skull_skeleton', 12, 3, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Steve Hut', 'skull_steve', 12, 3, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Wither Hut', 'skull_wither', 12, 3, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Zombie Hut', 'skull_zombie', 12, 3, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Diamant Hose', 'diamond_leggings', 15, 3, 'Verleiht dem Träger 6 Rüstungspunkte');


-- Erstellt die Tabelle Kategorie --
CREATE TABLE IF NOT EXISTS Kategorie(
    KategorieID int(11) NOT NULL AUTO_INCREMENT,
    KategorieName varchar(15) NOT NULL,
    PRIMARY KEY(KategorieID)
)ENGINE=INNODB;

-- Fügt der Tabelle Kategorie, die notwendigen Kategorien hinzu --
INSERT INTO Kategorie(KategorieName) VALUES
('Werkzeug'),
('Waffe'),   
('Ruestung'),
('Nahrung'); 


-- Legt Tabelle Kunde an --
CREATE TABLE IF NOT EXISTS Kunde(
    KundeID int(11) NOT NULL AUTO_INCREMENT,
    KundeNickname varchar(20) NOT NULL,
    KundeName varchar(20) NOT NULL,
    KundeVorname varchar(20) NOT NULL,
    KundeEMAIL varchar(50) NOT NULL,
    KundePasswd varchar(10) NOT NULL,
    PRIMARY KEY (KundeID)
)ENGINE=INNODB;

-- Fügt Beispiel Kunden an --
INSERT INTO Kunde (KundeNickname, KundeName, KundeVorname, KundeEMAIL, KundePasswd) VALUES
('Stormy Puma', 'Stern', 'Max', 'maxStern@toast.de', '123456'),
('El Studen', 'Pfeiffer', 'Axel', 'axelPfeiffer@toast.de', '456789'),
('The Puppy', 'Schmidt', 'Astrid', 'astridSchmidt@toast.de', '147852'),
('Homeless Laser', 'Rotenbach', 'Robert', 'robertRobert@toast.de', '852369'),
('King Slayer', 'Lannister', 'Jamie', 'jamieLannister@westeros.de', '987456'),
('Rotten Pilot', 'Fischer', 'Max', 'maxFischer@toast.de', '654321'),
('Sunny Panda', 'Brinkfurt', 'Nathalie', 'nathalieBrinkfurt@toast.de', '156975');

-- Erstellt die Tabelle Bestellungen --
CREATE TABLE IF NOT EXISTS Bestellungen(
    BestellID int(11) NOT NULL AUTO_INCREMENT,
    KundeID int(11) NOT NULL,
    Datum DATE,
    PRIMARY KEY (BestellID),
    FOREIGN KEY (KundeID) REFERENCES Kunde(KundeID)
)ENGINE=INNODB;



-- Erstellt die Tabelle Bestelldeatils --
CREATE TABLE IF NOT EXISTS Bestelldetails(
    BestellID int(11) NOT NULL,
    ProduktID int(11) NOT NULL,
    Anzahl int(11),
    PRIMARY KEY (BestellID, ProduktID),
    FOREIGN KEY (BestellID) REFERENCES Bestellungen(BestellID),
    FOREIGN KEY (ProduktID) REFERENCES Produkt(ProduktID)
)ENGINE=INNODB;

