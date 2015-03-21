<?php
include('header.php');

echo '<div class="contentbackground">';
echo '<div class="kasse">';

if(isset($_SESSION['products']) && isset($_SESSION['user'])){ 

    
    $user = $_SESSION['user'];

    echo '<div class="text"> Hallo ' . $user->KundeNickname . ' , das ist Ihre Einkaufsliste </div>';
    
    $sum = 0;
    
    foreach($_SESSION['products'] as $item){
        
        echo '<div class="kasseItem">';
        
        $result = $mysql->query("SELECT * FROM Produkt WHERE ProduktID = " . $item["id"] . ";");
          
        $product = $result->fetch_object();
        
        kasseProductView($product, $item["amount"]);
        
        $sum += $product->Preis * $item["amount"];
        
        echo '</div>';

    }
    
    echo '<div class="bottomBar">'; 
    
    echo '<ul>';
    
    echo '<li> Summe ' . $sum . ' € </li>';
    echo '<li> <a href="buy.php" onclick="FensterOeffnen(this.href, 800, 640); return false"> Jetzt Kaufen </a> </li>';
    
    echo '</ul>';
    
    echo '</div>';
    
    
}else{
     header('Location:goToKasse.php');
}


echo '</div>';
echo '</div>';


include('footer.php');


?>