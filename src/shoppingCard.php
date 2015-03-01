<?php
//TODO: Produkt detailes anzeigen
//      Summe zeigen

include('header.php');


echo '<div class="contentbackground">';
echo '<div class="shoppingCart">';

if(isset($_SESSION['products'])){
    echo '<ul>';
    
    foreach($_SESSION['products'] as $item){
        
        $id = $item["id"];
        $result = $mysql->query("SELECT * FROM Produkt WHERE ProduktID = " . $id . ";");
        $obj = $result->fetch_object();
        
        echo '<li>';
        
        echo $obj->ProduktName;

        
        echo " anzahl ".$item["amount"];
        
        
        echo '</li>';
             

    }
    
    
    echo '</ul>';
}else{
    echo 'Empty Card';
}

echo '</div>';
echo '</div>';


include('footer.php');
?>