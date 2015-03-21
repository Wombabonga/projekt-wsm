<?php

    #MySQL Datenbank
    $dbname = "wsm";
    $url = "localhost";
    $user = "root";
    $pwd = "";

    $mysql = new mysqli($url, $user, $pwd, $dbname);

    if(!$mysql){
        echo 'Error something went wrong';
        echo '<br>';
    }

?>