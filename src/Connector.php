<?php
    
    #Vaiablen ausfüllen
    $dbname = "";
    $url = "";
    $user = "";
    $pwd = "";

    mysql_connect($url, $user, $pwd) or die("Keine Verbindung mit der Datenbank möglich");
    mysql_select_db($dbname);


?>