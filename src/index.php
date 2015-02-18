<?php

include 'header.php';
include 'Connector.php';

$db = NEW DBconnector();
$db->test();

?>

    Hello world


<?php include 'footer.php' ?>