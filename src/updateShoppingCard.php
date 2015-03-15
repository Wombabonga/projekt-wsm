<?php 
session_start();

include_once('Connector.php');

//Produkt hinzufügen
if(isset($_POST["type"]) && $_POST["type"] == 'add'){


    $returnURL = "single.php?pid=" . $_POST['productID'];
    
    
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
            
            
            
        }else{
            $_SESSION['products'] = $new_product;
        }
        
        echo '<br>';
        
        print_r($_SESSION['products']);
        
        
        header('Location:'. $returnURL);
    }

}


//Produkt aus Warenkorb entfernen
if(isset($_GET['remove']) && isset($_SESSION['products'])){
    
    foreach($_SESSION['products'] as $item){
        
        if($item['id'] != $_GET['remove']){
            $product[] = array('id' => $item['id'], 'amount' => $item['amount']);
        }
        
        
        $_SESSION['products'] = $product;
        
    }
    
    header('Location:'.$_GET['returnURL']);
    
}


?>