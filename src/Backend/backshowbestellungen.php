<?php

include 'backheader.php';

$id = $_GET['kundeid'];

$result = $mysql->query("
SELECT
    Bestellungen.BestellID AS BestellID, Produkt.ProduktName AS ProduktName, Bestelldetails.Anzahl AS Anzahl, Bestellungen.Datum AS Datum
FROM
    Bestellungen
INNER JOIN
    Bestelldetails
ON
    Bestelldetails.BestellID = Bestellungen.BestellID
INNER JOIN
    Kunde
ON
    Bestellungen.KundeID = Kunde.KundeID
INNER JOIN
    Produkt
ON
    Produkt.ProduktID = Bestelldetails.ProduktID
WHERE 
    Bestellungen.KundeID = " . $id. ";");

while($bestellung = $result->fetch_object()){
    echo $bestellung->BestellID . " - " . $bestellung->ProduktName . " - " . $bestellung->Anzahl . " - " . $bestellung->Datum . '<br>';
}


?>