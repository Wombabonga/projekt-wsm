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

echo '<div class="showBestellungen">';
    
echo '<div class="tabelheader"> <ul> <li>BestellID</li> <li>Name</li> <li>Anzahl</li> <li>Datum</li> </div>';

while($bestellung = $result->fetch_object()){
    echo '<ul>';
    echo '<li>' . $bestellung->BestellID . '</li>';
    echo '<li>' . $bestellung->ProduktName . '</li>';
    echo '<li>' . $bestellung->Anzahl . '</li>';
    echo '<li>' . $bestellung->Datum . '</li>';
    echo '</ul>';
    
}

echo '</div>';

?>