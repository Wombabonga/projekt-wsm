<?php 
    include 'backheader.php';


    if(isset($_GET['type'])){
        
        echo '<div class="content">';
        
        if($_GET['type'] == 1){
            
            $productResults = $mysql->query("SELECT * FROM Produkt;");
            
            buildProductView($productResults);
            
        }else if($_GET['type'] == 2){
            
            $kundenResults = $mysql->query("SELECT * FROM Kunde;");
                
            buildKundeView($kundenResults);    
        
        }

        echo '</div>';
        
    }


    include 'backfooter.php'; 
?>