<?php



function editProduct($id){
    include '../Connector.php';

    $result = $mysql->query("SELECT * FROM Produkt WHERE ProduktID = " . $id);

    if($result){

        $product = $result->fetch_object();

        echo '<div class="editProduct">';

        echo '<form action="backeditsave.php" method="post">';

        echo '<ul>';

        echo '<li> ID </li> <li> <input type="hidden" name="id" value="' . $product->ProduktID . '">' . $product->ProduktID . '</li>';
        echo '<li> Name </li> <li><input type="text" name="name" value="' . $product->ProduktName . '"> </li>';
        echo '<li> Beschreibung </li> <li><input type="text" name="beschreibung" value="' . $product->ProduktBeschreibung . '"> </li>';

        echo '<li> Kategorie </li> <li><select name="kategorie">';

        $res = $mysql->query("SELECT * FROM Kategorie;"); 
        while($kat = $res->fetch_object()){
            echo '<option ';
            
            if($product->kategorieID == $kat->KategorieID)
                echo 'selected';
            
            echo '>' . $kat->KategorieName . '</option>';
        }

        echo '</select> </li>';

        echo '<li> Preis </li> <li><input type="text" name="preis" value="' . $product->Preis . '"> </li>';
        echo '<li> Bild </li> <li><input type="text" name="bild" value="' . $product->Bild . '"> </li>';

        echo '<div class="one"> <li> <input type="submit" name="Speichern" value="Speichern"/> </li> </div>';

        echo '</ul>';


        echo '<input type="hidden" name="type" value="edit">';

        echo '</form>';

        echo '</div>';
    }
}

function removeProduct($id){
    include '../Connector.php';
    
    $res = $mysql->query("DELETE FROM Produkt WHERE ProduktID = " . $id . ";");
    
    if($res)
        header('Location:backindex.php?type=1');
    
}

function addProduct(){
    include '../Connector.php';

    echo '<div class="editProduct">';

    echo '<form action="backeditsave.php" method="post">';

    echo '<ul>';


    echo '<li> Name </li> <li><input type="text" name="name" placeholder="Produkt Name"> </li>';
    echo '<li> Beschreibung </li> <li><input type="text" name="beschreibung" placeholder="Produkt Beschreibung"> </li>';

    echo '<li> Kategorie </li> <li><select name="kategorie">';

    $res = $mysql->query("SELECT * FROM Kategorie;"); 
    while($kat = $res->fetch_object()){
        echo '<option>' . $kat->KategorieName . '</option>';
    }

    echo '</select> </li>';

    echo '<li> Preis </li> <li><input type="text" name="preis" placeholder="Preis "> </li>';
    echo '<li> Bild </li> <li><input type="text" name="bild" placeholder="Bild"> </li>';

    echo '<div class="one"> <li> <input type="submit" name="Hinzufügen" value="Hinzufügen"/> </li> </div>';

    echo '</ul>';

    echo '<input type="hidden" name="type" value="add">';

    echo '</form>';

    echo '</div>';
}

function showkunde($id){
    include '../Connector.php';

    $result = $mysql->query("SELECT * FROM Kunde WHERE KundeID = " . $id);

    if($result){

        $kunde = $result->fetch_object();
    
        echo '<div class="showKunde">';

        echo '<ul>';
        
        echo '<li> ID </li> <li> ' . $kunde->KundeID;
        echo '<li> NickName </li> <li> ' . $kunde->KundeNickname;
        echo '<li> Name </li> <li> ' . $kunde->KundeName;
        echo '<li> Vorname </li> <li> ' . $kunde->KundeVorname;
        echo '<li> Email </li> <li> ' . $kunde->KundeEMAIL;
        
         echo '<div class="one"> <li> <a href="backshowbestellungen.php?kundeid='. $kunde->KundeID .'"> Bestellungen </a> </li> </div>';
        
        echo '</ul>';


        echo '</div>';
    }
}



?>