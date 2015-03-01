<?php
    
    #Vaiablen ausfüllen
    $dbname = "wsm";
    $url = "localhost";
    $user = "root";
    $pwd = "";

    //mysql_connect($url, $user, $pwd) or die("Keine Verbindung mit der Datenbank möglich");
    //mysql_select_db($dbname);

    $mysql = new mysqli($url, $user, $pwd, $dbname);

    if($mysql){
        echo 'Connection is active';
    }else{
        echo 'Error something went wrong';
    }

    echo '<br>';
?>