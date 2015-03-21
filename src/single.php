<?php 

include 'header.php';

echo '<div class="contentbackground">';
echo '<div class="single">';

$result = $mysql->query("SELECT * FROM Produkt WHERE ProduktID = " .$_GET['pid'] . ";");
$produkt = $result->fetch_object();

ProductView($produkt);

echo '</div>';
echo '</div>';

include 'footer.php';
?>