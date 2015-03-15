<?php

include_once('header.php');


if(isset($_SESSION['user']))
    header('Location:kasse.php');



echo '<div class="contentbackground">';
echo '<div class="login">';



echo '<form action="login.php" method="POST">';

echo '<div class="text"> Sie sind berreits Kunde ? Dann hier Anmelden </div>';

echo '<ul>';

echo '<li> <input type="text" name="login_nickname" placeholder="Nickname"> </li>';
echo '<li> <input type="text" name="login_passwd" placeholder="Passwort"> </li>';

echo '<li> <input type="submit" name="login" value="Anmelden"> </li>';

echo '</ul>';


echo '<div class="text">Neuer Kunde ? Kein Problem einfach hier Registrieren </div>';

echo '<ul>';

echo '<li> <input type="text" name="reg_nickname" value="" placeholder="Nickname"> </li>';
echo '<li> <input type="text" name="reg_mail" placeholder="E-Mail Addresse"> </li>';
echo '<li> <input type="text" name="reg_nachname" placeholder="Nachname"> </li>';
echo '<li> <input type="text" name="reg_vorname" placeholder="Vorname"> </li>';
echo '<li> <input type="text" name="reg_passwd" placeholder="Passwort"> </li>';
echo '<li> <input type="text" name="reg_passwd_2" placeholder="Passwort Bestätigen"> </li>';

echo '<li> <input type="submit" name="register" value="Registrieren">';

echo '</ul>';


echo '</form>';

echo '</div>';
echo '</div>';


include_once('footer.php');

?>