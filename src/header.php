<?php 
    session_start();


    include_once 'Connector.php'; 
    include 'ViewBuilder.php';
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

                                <input type="text" name="suche"                                       placeholder="Suche ... "
                                       >

                            </li>
                            
                            <li>
                                
                                <input type="submit" name="Allonsy" value="LOS">
                            
                            </li>
                            
                            <li>

                                <a href="shoppingCard.php">Warenkorb</a>
                                
                               <!--
                                Noch nicht verfügbar
                                
                                <a>Anmelden</a>
                                
                                <a>Registrieren</a> 
                                -->
                                
                            </li>


                        </ul>

                    </form>

                </div>

            </div>

        </div>
