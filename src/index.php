
    
    <?php include 'header.php'; ?>


    <div class="contentbackground">

        <div class="content">
        
      
                
            <table border="1px">
            
                
                
                <?php 
                
                $ergebnis = null;

                if(isset($_GET['kategorie'])){
                    
                    $ergebnis = mysql_query("SELECT * FROM Produkt where kategorieID = " .$_GET['kategorie'] . ";");
                    
                }else{
         
                    $ergebnis = mysql_query("SELECT * FROM Produkt;");
           
                }

    
                echo '<div class="container">';

                while($zeile = mysql_fetch_array($ergebnis, MYSQL_ASSOC)){
            
                    echo '<div class="item">';
                    
            
                    ProductPreview($zeile['ProduktID']);
                    
                    echo '</div>';
        
                
                }

                echo '</div>';
                
                ?>
            
            
            
                
            </table>
                
            
            
        </div>

    </div>




    <?php include 'footer.php' ?>
  
