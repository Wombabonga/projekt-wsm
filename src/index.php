
    
    <?php include 'header.php'; ?>


    <div class="contentbackground">

        <div class="content">
        
      
                
            <table border="1px">
            
                
                
                <?php 

                $result = null;

                if(isset($_GET['kategorie'])){
           
                    $result = $mysql->query("SELECT * FROM Produkt WHERE kategorieID = " .$_GET['kategorie'] . ";");
                    
                }else if(isset($_POST['suche'])){
                 
                    $result = $mysql->query("SELECT * FROM Produkt WHERE ProduktName LIKE '%" .$_POST['suche'] . "%';");
                    
                }else{
         
                    $result = $mysql->query("SELECT * FROM Produkt;");
           
                }

    
                echo '<div class="container">';


                while($zeile = $result->fetch_object()){
            
                    echo '<div class="item">';
                    
            
                    ProductPreview($zeile);
                    
                    echo '</div>';
        
                
                }

                echo '</div>';
                
                ?>
            
            
            
                
            </table>
                
            
            
        </div>

    </div>




    <?php include 'footer.php' ?>
  
