<html>

    <head>
    
        <meta charset="utf-8"/>

       <link rel="stylesheet" type="text/css" href="css/Layout.css">
        
        <title>WSM - ProjektName</title>
        
        <?php include 'Connector.php'; include 'ViewBuilder.php'; ?>
    
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

                            $allKat = mysql_query('SELECT * FROM Kategorie');
                            while($kat = mysql_fetch_array($allKat, MYSQL_ASSOC)){
                                echo '<li>';

                                echo '<a href="index.php?kategorie=' . $kat['KategorieID'] . '">';
                                echo $kat['KategorieName'];
                                echo '</a>';

                                echo '</li>';



                            }


                            ?>

                            <li>
                            
                                Suche 
                            
                            </li>
                            
                            <li>

                                <input type="text" value="suche">

                            </li>
                            
                            <li>
                                
                                <input type="submit" name="Allonsy" value="LOS">
                            
                            </li>


                        </ul>

                    </form>

                </div>

            </div>

        </div>
