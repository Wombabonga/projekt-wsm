<html>
    <head>
    
        <title>Backend Login</title>
        
        <link rel="stylesheet" type="text/css" href="../css/backend.css">
    
    </head>
    
    <body>
    
        
        <div class="login">
        
            <form action="backloginaction.php" method="post">

                <div class="text"> <?php if(isset($_GET['err'])) echo 'Upps! Da lief was schief versuchs nochmal <br> ';  ?> Anmelden :  </div>

                <ul>

                    <li> <input type="text" name="login_name" placeholder="Benutzer Name"> </li>
                    <li> <input type="password" name="login_passwd" placeholder="Passwort"> </li>

                    <li> <input type="submit" name="login" value="Anmelden"> </li>

                </ul>

            </form>
            
            </div>
    
    </body>

</html>