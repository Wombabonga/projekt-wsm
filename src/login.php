<?php
session_start();


include_once('Connector.php');


//Login
if(isset($_POST["login"]) && isset($_POST["login_nickname"]) && isset($_POST["login_passwd"])){

    $result = $mysql->query("SELECT * FROM Kunde WHERE KundeNickname = '" . $_POST['login_nickname'] . "' AND KundePasswd = '" . $_POST['login_passwd'] . "';");
    $user = $result->fetch_object();
    
    if($result){
                
        $_SESSION['user'] = $user;
                
        
        header('Location:kasse.php');
        
    }
    
}


//Register
if($_POST["register"] && $_POST["reg_nickname"] && $_POST["reg_mail"] && $_POST["reg_nachname"] && $_POST["reg_vorname"] && $_POST["reg_passwd"] && $_POST["reg_passwd_2"]){
       
    
    $nickname = $_POST['reg_nickname'];
    $mail = $_POST['reg_mail'];
    $nachname = $_POST['reg_nachname'];
    $vorname = $_POST['reg_vorname'];
    $passwd = $_POST['reg_passwd'];
    $passwd2 = $_POST['reg_passwd_2'];

    if($passwd == $passwd2){
        
        $result = $mysql->query("INSERT INTO Kunde (KundeNickname, KundeName, KundeVorname, KundeEMAIL, KundePasswd) VALUES ('" . $nickname . "' , '" . $nachname . "' , '" . $vorname . "' , '" . $mail . "' , '" . $passwd . "');") or die("Fehler " . $mysql->error);
        
        if($result){
            
            if(!isset($_SESSION['user'])){
                $result2 = $mysql->query("SELECT * FROM Kunde WHERE KundeNickname = '" . $nickname . "' ;");
                $user = $result2->fetch_object();
                
                $_SESSION['user'] = $user;
            }
            
            header('Location:kasse.php');
        }else{
            echo "kein neuen kunden angelegt";
        }
        
        
        
    }else{
        header('Location:goToKasse.php');
    }
        
}else{
    header('Location:goToKasse.php');
}



?>