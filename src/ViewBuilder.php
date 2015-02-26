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
        
        echo '<img src="img/items/'. $item['Bild'] .'.png"/><div><table border ="0" position="right">
        <tr><td><span style="font-weight:100; font-size:500%">'. $item['ProduktName'] .'</span></td></tr><tr><td><br></td></tr><tr><td><span style="font-weight:100; font-size:200%">'. $item['ProduktBeschreibung'] .'</td></tr></table></div>';;
         
        
       // echo $ProductID; 
    }

?>