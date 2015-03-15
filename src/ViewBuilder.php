<?php

    include_once('Util.php');

    function ProductPreview($Produkt){
      
        echo '<a href="single.php?pid=' . $Produkt->ProduktID . '">';

        echo '<div class="text">';
        
        echo $Produkt->ProduktName;
        
        echo '</div>';
        
        echo '<img src="img/items/'. $Produkt->Bild .'.png"/>';
        
        
        echo '<div class="text">';
        
        echo 'Preis ' . $Produkt->Preis . " €";
                
        echo '</div>';
 
        echo '</a>';
    }

    function ProductView($Produkt){
        
        echo '<img src="img/items/'. $Produkt->Bild.'.png"/>';
       
        echo '<div class="text head">' . $Produkt->ProduktName . '</div>';
        
        echo '<div class="text description">' . $Produkt->ProduktBeschreibung . '</div>';
        
        echo '<div class="text price"> Preis ' . $Produkt->Preis . ' € </div>';
        
        
        
        echo '<form action="updateShoppingCard.php" method="post">';
        
        echo '<div class="text formText"> Anzahl <select name="amount">';
        
        for($i = 1; $i <= 20; $i++)
            echo '<option value="' .$i . '">' . $i . '</option>';
    
        
        echo '</select>';
        
       // echo '<input type="button" value="Zum Warenkorb hinzufügen">';
        
        echo '<button> Zum Warenkorb hinzufügen </button>';
        
        echo '<input type="hidden" name="productID" value="' .$Produkt->ProduktID. '">'; 
        echo '<input type="hidden" name="type" value="add">';
        
            
        echo '</div>';
            
        echo '</form>';
        
    }

    function shoppingCartProductView($Product, $amount){
        
        
        echo '<img src="img/items/' . $Product->Bild .'.png"/>';
    
        echo '<ul>';
     
      
        echo '<li>' . $Product->ProduktName . '</li>';
        echo '<li>' . 'Menge ' . $amount . '</li>';
        echo '<li>' . $Product->Preis * $amount . ' €' . '</li>';
        
        echo '<li> <a href="updateShoppingCard.php?remove=' . $Product->ProduktID .'&returnURL=shoppingCard.php"> Entfernen </a> </li>';
        
        echo '</ul>';
        
    }

    function kasseProductView($product, $amount){
        
        echo '<img src="img/items/' .$product->Bild . '.png"/>';
        
        echo '<ul>';
        
        echo '<li>' . $product->ProduktName . '</li>';
        echo '<li>' . 'Menge ' . $amount . '</li>';
        echo '<li>' . $product->Preis * $amount . ' €' . '</li>';
 
        
        echo '</ul>';
        
    }

    function buyProductView($product){
        
        echo '<img src="img/items/' .$product->Bild . '.png"/>';
        
        echo '<ul>';
        
        echo '<li>' . $product->ProduktName . '</li>';
        echo '<li>' . 'Code ' . '</li>';
        echo '<li>' . getProductCode() . '</li>';
 
        
        echo '</ul>';
        
    }




?>