<?php 
session_start();

include('Connector.php');
include('ViewBuilder.php');
?>

<html>

    <head>
    
        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="css/Layout.css">
        
        <title>WSM - ProjektName</title>
    
    </head>

    <body>

         <div id="imgLogo">

            
            <img src="img/background/minecraft_logo.png">


        </div>
        
        
        <div class="headerbackground"></div>
        
<?php
echo '<div class="contentbackground">';
echo '<div class="buy">';

if(isset($_GET['logout']) && $_GET['logout'] == true)
{
    session_destroy();
}

if(isset($_SESSION['products']) && isset($_SESSION['user'])){

    $user = $_SESSION['user'];

    echo '<div class="text"> Vielen Dank für deinen Einkauf ' . $user->KundeNickname . '</div>';

    
    foreach($_SESSION['products'] as $item){
        
        echo '<div class="buyItem">';
        
        $result = $mysql->query("SELECT * FROM Produkt WHERE ProduktID = " . $item["id"] . ";");
          
        $product = $result->fetch_object();
        
        buyProductView($product);
        
        
        echo '</div>';

    }
    
    echo '<div class="bottomBar">'; 
    
    echo '<ul>';
    
    echo '<li> <a href="goToKasse.php"> Drucken </a> </li>';
    echo '<li> <a href="buy.php?logout=true"> Schließen Und Abmelden </a> </li>';
    
    echo '</ul>';
    
    echo '</div>';
    
    
    
}
else{
    echo '<div class="text"> Sie sind nun abgemeldet </div>';
}


echo '</div>';
echo '</div>';

?>
         <div class="footerbackground"></div>
        
    </body>
    
</html>