<?php
//TODO: Produkt detailes anzeigen
//      Summe zeigen

include('header.php');


echo '<div class="contentbackground">';
echo '<div class="shoppingCart">';

if(isset($_SESSION['products'])){

    $sum = 0;
    
    echo '<div class="text"> Ihre Einkaufsliste </div>';
    
    // Alle Produkte die im Warenkorb sind auflisten
    foreach($_SESSION['products'] as $item){
        
        echo '<div class="shoppingItem">';
        
        $result = $mysql->query("SELECT * FROM Produkt WHERE ProduktID = " . $item["id"] . ";");
          
        $product = $result->fetch_object();
        
        shoppingCartProductView($product, $item["amount"]);
        
        $sum += $product->Preis * $item["amount"];
        
        echo '</div>';

    }
    
    echo '<div class="bottomBar">'; 
    
    echo '<ul>';
    
    echo '<li> Summe ' . $sum . ' € </li>';
    echo '<li> <a href="goToKasse.php"> Zur Kasse </a> </li>';
    
    echo '</ul>';
    
    echo '</div>';
    
    
    
}else{
    echo '<div class="text"> Ihr Einkaufswagen ist im moment leer </div>';
}

echo '</div>';
echo '</div>';


include('footer.php');
?>