<?php

    function test($x){
        echo $x;
    }

    function ProductPreview($ProduktID){
        $erg = mysql_query('SELECT * FROM Produkt WHERE ProduktID = ' . $ProduktID)
            or die("Fehler : " . mysql_error());
        $item = mysql_fetch_array($erg, MYSQL_ASSOC);
        
       
        
        echo '<a href="single.php?pid=' . $ProduktID . '">';

        echo '<p>';
        
        echo $item['ProduktName'];
        
        echo '</p>';
        
        
        echo '<img src="img/items/'. $item['Bild'] .'.png"/>';
        
        
        echo '<p>';
        
        echo 'Preis ' . $item['Preis'] . " €";
                
        echo '</p>';
 
        echo '</a>';
    }

    function ProductView($ProduktID){
        $erg = mysql_query('SELECT * FROM Produkt WHERE ProduktID = ' . $ProduktID)
            or die("Fehler : " . mysql_error());
        $item = mysql_fetch_array($erg, MYSQL_ASSOC);
        
        echo '<img src="img/items/'. $item['Bild'] .'.png"/>';
        
        
        echo '<div class="txt">';
        
        echo $item['ProduktName'];
        
        echo '</div>';
        
        
        echo '<div class="txt"> <font size="5">';
        
        echo $item['ProduktBeschreibung'];
        
        echo '</font></div>';
       // echo $ProductID; 
    }

?>