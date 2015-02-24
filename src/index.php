
    
    <?php include 'header.php'; ?>


    <div class="contentbackground">

        <div class="content">
        
      
                
            <table border="1px">
            
                
                
                <?php 
                
         
                $ergebnis = mysql_query("SELECT * FROM Produkt;");

    
                echo '<div class="container">';

                while($zeile = mysql_fetch_array($ergebnis, MYSQL_ASSOC)){
            
                    echo '<div class="item">';
                    
                 /*   echo '<a href="productView.php?pn='.$zeile['ProduktName'].'"><img src="img/items/'. $zeile['Bild'] .'.png"></a>';
         
                    test("hello");
            
                    echo $zeile['ProduktName'];*/
                    
                    ProductPreview($zeile['ProduktID']);
                    
                    echo '</div>';
        
                
                }

                echo '</div>';
                
                ?>
            
            
            
                
            </table>
                
            
            
        </div>

    </div>




    <?php include 'footer.php' ?>
  
