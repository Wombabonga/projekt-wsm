/*
    SQL Datei 
    Datenbank für wsm
*/

-- Löscht die Datenbank falls Sie schon existiert --
DROP DATABASE IF EXISTS wsm;

-- Erstellt eine neua datenbank --
create database wsm CHARACTER SET utf8 COLLATE utf8_general_ci;

-- script spoll mit der wsm datenbank arbeiten --
use wsm;

-- Erstellt die Tabelle Produkt--
CREATE TABLE IF NOT EXISTS Produkt (
    ProduktID int(11) NOT NULL AUTO_INCREMENT,
    ProduktName varchar(20) NOT NULL,
    ProduktBeschreibung text,
    kategorieID int(11),
    Bild varchar(20) DEFAULT NULL,
    LagerBestand int(4) DEFAULT NULL,
    Preis float(6,2) DEFAULT NULL,
    PRIMARY KEY (ProduktID)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Fügt der Tabelle Produkt eine vielzahl von datensätzen hinzu--
INSERT INTO Produkt (ProduktName, Bild, Preis, KategorieID, LagerBestand, ProduktBeschreibung) VALUES
('Stock', 'stick', 1, 1, 5000, 'Basiselement für alle Werkzeuge Vielseitig einsetzbar'),
('Stein Axt', 'stone_axe', 5, 1, 1000, 'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Stein Hacke', 'stone_hoe', 4, 1, 1000, 'Wird verwendet, um Erd- und Grasblöckee umzugraben und sie damit fürs Bepflanzen vorzubereiten'),
('Stein Spitzhacke', 'stone_pickaxe', 5, 1, 1000, 'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Stein Schaufel', 'stone_shovel', 4, 1, 500, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Holz Schaufel', 'wood_shovel', 2, 1, 500, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Holz Spitzhacke', 'wood_pickaxe', 3, 1, 500, 'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Holz Hacke', 'wood_hoe', 2, 1, 500, 'Wird verwendet, um Erd- und Grasblöckee umzugraben und sie damit fürs Bepflanzen vorzubereiten'),
('Holz Axt', 'wood_axe', 3, 1, 1000, 'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Diamant Axt', 'diamond_axe', 10, 1, 500, 'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Diamant Hacke', 'diamond_hoe', 8, 1, 500, 'Wird verwendet, um Erd- und Grasblöckee umzugraben und sie damit fürs Bepflanzen vorzubereiten'),
('Diamant Schaufel', 'diamond_shovel', 8, 1, 500, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Diamant Spitzhacke', 'diamond_pickaxe', 10, 1, 500, 'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Diamant Schwert', 'diamond_sword', 15, 2, 500, 'Wird zum kämpfen verwendet (+7 Angriffsschaden)'),
('Diamant Schuhe', 'diamond_boots', 12, 3, 500, 'Verleiht dem Träger +3 Rüstungspunkte'),
('Diamant Brustpanzer', 'diamond_chestplate', 18, 3, 500, 'Verleiht dem Träger 8 Rüstungspunkte'),
('Diamant Helm', 'diamond_helmet', 12, 3, 500, 'Verleiht dem Träger +3 Rüstungspunkte'),
('Apfel', 'apple', 3, 4, 500, 'Regeneriert 2 Leben'),
('Goldener Apfel', 'apple_golden', 6, 4, 500, 'Regeneriert 2 Leben und regeneriert Leben für 4 Sekunden'),
('Pfeil', 'arrow', 1, 2, 500, 'Wird als Munition für Bogen verwendet'),
('Steak', 'beef_cooked', 5, 4, 500, 'Regeneriert 4 Leben'),
('Bogen', 'bow_standby', 10, 2, 500, 'Erlaubt Fernangriffe mit Pfeilen'),
('Brot', 'bread', 5, 4, 500, 'Regeneriert 2,5 Leben'),
('Keks', 'cookie', 4, 4, 500, 'Regeneriert 1 Leben'),
('Backfisch', 'fish_cod_cooked', 5, 4, 500, 'Regeneriert 2,5 Leben'),
('Eisenaxt', 'iron_axe', 12, 2, 500, 'Wird verwendet um Holzblöcke schneller als per Hand abzubauen'),
('Eisenstiefel', 'iron_boots', 12, 3, 500, 'Verleiht dem Träger 2 Rüstungspunkte'),
('Eisen Brustpanzer', 'iron_chestplate', 12, 3, 500, 'Verleiht dem Träger 6 Rüstungspunkte'),
('Eisen Spitzhacke', 'iron_pickaxe', 12, 1, 500, 'Wird benötigt um Stein- und Erzblöcke abzubauen'),
('Eisen Schaufel', 'iron_shovel', 12, 1, 500, 'Hiermit kannst du Erde,Gras, Sand, Kies und Schnee schneller als mit der Hand abbauen. Du brauchst eine Schaufel, um Schneebälle abzubauen'),
('Eisen Schwert', 'iron_sword', 12, 2, 500, 'Wird zum kämpfen verwendet (+6 Angriffsschaden)'),
('Wassermelone', 'melon', 12, 4, 500, 'Regeneriert 1 Leben'),
('Kartoffel', 'potato_baked', 12, 4, 500, 'Regeneriert 0,5 Leben'),
('Kürbiskuchen', 'pumpkin_pie', 12, 4, 500, 'Regeneriert 1,5 Leben'),
('Creeper Hut', 'skull_creeper', 12, 3, 500, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Skelet Hut', 'skull_skeleton', 12, 3, 500, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Steve Hut', 'skull_steve', 12, 3, 500, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Wither Hut', 'skull_wither', 12, 3, 500, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Zombie Hut', 'skull_zombie', 12, 3, 500, 'Können als dekoration plaziert werden oder als Helm getragen werden'),
('Diamant Hose', 'diamond_leggings', 15, 3, 500, 'Verleiht dem Träger 6 Rüstungspunkte');


-- Erstellt die Tabelle Kategorie --
CREATE TABLE IF NOT EXISTS Kategorie(
    KategorieID int(11) NOT NULL AUTO_INCREMENT,
    KategorieName varchar(15) NOT NULL,
    PRIMARY KEY(KategorieID)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Fügt der Tabelle Kategorie, die notwendigen Kategorien hinzu --
INSERT INTO Kategorie(KategorieName) VALUES
('Werkzeug'),
('Waffe'),   
('Ruestung'),
('Nahrung'); 


-- Legt Tabelle Kunde an --
CREATE TABLE IF NOT EXISTS Kunde(
    KundeID int(11) NOT NULL AUTO_INCREMENT,
    KundeName varchar(20) NOT NULL,
    KundeVorname varchar(20) NOT NULL,
    KundeEMAIL varchar(50) NOT NULL,
    PRIMARY KEY(KundeID)
)CHARACTER SET utf8 COLLATE utf8_general_ci;















