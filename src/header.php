<?php 
    session_start();

    include 'Connector.php'; 
    include 'ViewBuilder.php';
?>

<html>

    <head>
    
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <link rel="stylesheet" type="text/css" href="css/Layout.css">
        <script type="text/javascript" src="js/script.js"></script>
        
        <title>Minecraft Items Webshop</title>
    
    </head>

    <body>

        <div id="imgLogo">

            <a href="index.php">
            
                <img src="img/background/minecraft_logo.png">

            </a>

        </div>

        <div class="headerbackground">

            <div class="header">

                <div id="navigation">
                
                    <form action="index.php" method="post">

                        <ul>

                            <?php 

                            $result = $mysql->query("SELECT * FROM Kategorie;");
                          
                            while($kat = $result->fetch_object()){
                                echo '<li>';

                                echo '<a href="index.php?kategorie=' . $kat->KategorieID. '">';
                                echo $kat->KategorieName;
                                echo '</a>';

                                echo '</li>';
                            }

                            ?>
                            
                            <li>

                                <input type="text" name="suche" placeholder="Suche ... ">

                            </li>
                            
                            <li>
                                
                                <input type="submit" name="Allonsy" value="LOS">
                            
                            </li>
                            
                            <li>

                                <a href="shoppingCard.php">Warenkorb</a>
        
                            </li>


                        </ul>

                    </form>

                </div>

            </div>

        </div>
