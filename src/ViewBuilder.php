<?php

    function test($x){
        echo $x;
    }

    function ProductPreview($Produkt){
      
        echo '<a href="single.php?pid=' . $Produkt->ProduktID . '">';

        echo '<p>';
        
        echo $Produkt->ProduktName;
        
        echo '</p>';
        
        echo '<img src="img/items/'. $Produkt->Bild .'.png"/>';
        
        
        echo '<p>';
        
        echo 'Preis ' . $Produkt->Preis . " €";
                
        echo '</p>';
 
        echo '</a>';
    }

    function ProductView($Produkt){
        
       /* echo '<img src="img/items/'. $Produkt->Bild.'.png"/><div><table border ="0" position="right">
        <tr><td><span style="font-weight:100; font-size:500%">'. $Produkt->ProduktName .'</span></td></tr><tr><td><br></td></tr><tr><td><span style="font-weight:100; font-size:200%">'. $Produkt->ProduktBeschreibung .'</td></tr></table></div>';;*/
      
        
        
        echo '<img src="img/items/'. $Produkt->Bild.'.png"/>';
       
        echo '<div class="txt">';
        
        echo $Produkt->ProduktName; 
        echo $Produkt->ProduktBeschreibung;
         
        echo '</div>';
        
          echo '<form action="updateShoppingCard.php" method="post">';
        
        echo '<select name="amount">';
        
        for($i = 1; $i <= 20; $i++)
            echo '<option value="' .$i . '">' . $i . '</option>';
    
        
        echo '</select>';
        
        echo '<button>Add To cart</button>';
        
        echo '<input type="hidden" name="productID" value="' .$Produkt->ProduktID. '">'; 
        echo '<input type="hidden" name="type" value="add">';
            
            
        echo '</form>';
        
    }

?>