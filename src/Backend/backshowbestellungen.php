<?php

include 'backheader.php';

$id = $_GET['kundeid'];

$result = $mysql->query("
SELECT Bestellungen.BestellID AS BestellID, Bestelldetails.Anzahl AS Anzahl
FROM Kunde
INNER JOIN Bestellungen (
    INNER JOIN Bestelldetails ON Bestelldetails.BestellID = Bestellungen.BestellID
)ON Bestellungen.KundeID = Kunde.KundeID
WHERE Kunde.KundeID = " . $id . ";"); 


/*$result = $mysql->query('
SELECT Bestellungen.BestellID AS BestellID, Bestellungen.Datum AS Datum
FROM Kunde
INNER JOIN Bestellungen ON Bestellungen.KundeID = Kunde.KundeID
WHERE Kunde.KundeID = ' . $id . ';'); 
*/

if($result) echo "DONE <br>";
else echo $mysql->error;


while($bestellung = $result->fetch_object()){
    echo $bestellung->BestellID . " - " . $bestellung->Anzahl . '<br>';
}


?>