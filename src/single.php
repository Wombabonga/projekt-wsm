<?php 

include 'header.php';


echo '<div class="contentbackground">';
echo '<div class="single">';

ProductView($_GET['pid']);


echo '</div>';
echo '</div>';

include 'footer.php';
?>