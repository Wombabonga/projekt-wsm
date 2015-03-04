<?php 
session_start();

include_once('Connector.php');

//Produkt hinzufügen
if(isset($_POST["type"]) && $_POST["type"] == 'add'){


    $result = $mysql->query("SELECT * FROM Produkt WHERE produktID = " . $_POST['productID'] . ";");
    $obj = $result->fetch_object();
    
    if($result){

        $new_product = array(array('id' => $_POST['productID'], 'amount' => $_POST['amount']));
        
        if(isset($_SESSION['products'])){
          
            $found = false;
            
            
            echo 'old<br>';

            foreach($_SESSION['products'] as $item){
                echo $item['id'] . " anzahl " .$item['amount'] . '<br>';
            }
            
            echo '<br>';
            
            
            foreach($_SESSION['products'] as $item){
                
                echo $item['id'];
                
                
                if($item['id'] == $_POST['productID']){
                    
                    $product[] = array('id' => $item['id'], 'amount' => $_POST['amount']);
                    $found = true;
                    
                    echo 'Produkt gefunden<br>';
         
                }else{
                
                    $product[] = array('id' => $item['id'], 'amount' => $item['amount']);
                    echo 'Produkt neu hinzufgefugt<br>';
                    
                }                
            
            }
            
            if($found == false){
                
                $_SESSION['products'] = array_merge($product, $new_product);
            
            }else{
                
                $_SESSION['products'] = $product;
            
            }
            
            
            echo '<br>new<br>';
            
            foreach($_SESSION['products'] as $item){
                echo $item['id'] . " anzahl " .$item['amount'] . '<br>';
            }
            
            
            //Produkt details anzeigen der zum Warenkorb hinzugeügt wurde
            showAddedProduct($obj, $_POST["amount"]);
            
        }else{
            $_SESSION['products'] = $new_product;
        }
        
        echo '<br>';
        
        print_r($_SESSION['products']);
        
        
        //echo $obj['ProduktName'];
    }
    
    //TODO: produkte loschen
    
    
}


function showAddedProduct($product, $amount){
    echo '<br><br>';
    echo $product->ProduktName . " wurde hinzugefugt";
    echo $amount;
}

?>