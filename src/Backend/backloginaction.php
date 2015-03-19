<?php

//Login
if(isset($_POST["login"])){

    if($_POST['login_name'] == "Root" && $_POST['login_passwd'] == "123"){        
        header('Location:backindex.php');
    }else{
        header('Location:backlogin.php?err=true');
    }
    
}


?>