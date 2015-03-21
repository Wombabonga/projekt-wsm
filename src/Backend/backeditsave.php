<?php

include '../Connector.php';

$id = $_POST['id'];
$name = $_POST['name'];
$beschreibung = $_POST['beschreibung'];
$kat = $_POST['kategorie'];
$preis = $_POST['preis'];
$bild = $_POST['bild'];

$katres = $mysql->query("SELECT * FROM Kategorie WHERE KategorieName = '" . $kat . "';");

$newKatobj = $katres->fetch_object();
$newKat = $newKatobj->KategorieID;

$sql;

if($_POST['type'] == "edit"){
    $sql = 'UPDATE Produkt SET ProduktName="'.$name.'", ProduktBeschreibung="'.$beschreibung.'", kategorieID='.$newKat.', Preis='.$preis.',Bild="'.$bild.'" WHERE ProduktID = ' . $id . ';';
}else if($_POST['type'] == "add"){
    $sql = 'INSERT INTO Produkt (ProduktName, Bild, Preis, KategorieID, ProduktBeschreibung) VALUES ("'.$name.'","'.$bild.'",'.$preis.','.$newKat.',"'.$beschreibung.'");';
}



$done = $mysql->query($sql);
                
if($done)
    header('Location:backindex.php?type=1');


?>