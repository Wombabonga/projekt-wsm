<?php

function buildProductView($ProductResults){
    
    echo '<div class="products">';
    
    echo '<div class="navigation">';
    
    echo '<ul>';
    
    echo '<li> <a href="backedit.php?type=1&opt=add"> Neues Produkt Hinzufügen </a> </li>';
    
    echo '</ul>';
    
    echo '</div>';
    
      echo '<div class="tabelheader"> <ul> <li> Bild </li> <li> Produkt Name </li> <li> Preis </li> <li></li> </ul> </div>';
    
    while($product = $ProductResults->fetch_object()){
        echo '<ul>';
        
        echo '<li><img src="../img/items/' . $product->Bild . '.png"/></li>';
        
        echo '<li>' . $product->ProduktName . '</li>';
        echo '<li>' . $product->Preis . ' € </li>';
        echo '<li> <a href="backedit.php?type=1&opt=edit&id='. $product->ProduktID.'"> Bearbeiten </a> </li>';
       // echo '<li> <a href="backedit.php?type=1&opt=rm&id='. $product->ProduktID.'"> Entfernen </a> </li>';
        
        echo '</ul>';
    }
    
    echo '</div>';
}

function buildKundeView($KundenResults){
    
    echo '<div class="kunde">';
        
    echo '<div class="tabelheader"> <ul> <li> NickName </li> <li> Name </li> <li> Vorname </li> </ul> </div>';
    
    while($kunde = $KundenResults->fetch_object()){
        echo '<ul>';
        
        echo '<li>' . $kunde->KundeNickname . '</li>';
        echo '<li>' . $kunde->KundeName. ' </li>';
        echo '<li>' . $kunde->KundeVorname. ' </li>'; 
        echo '<li> <a href="backedit.php?type=2&opt=edit&id='. $kunde->KundeID.'"> Ansehen </a> </li>';
        
        echo '</ul>';
    }
    
     echo '</div>';
}

?>