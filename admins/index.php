<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="Erwinn"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>AnimeCode - Admins</title>
        </head>
        <body>
      


        <form action="" methode="post" > 

<input id="btn" type="submit" value="envoyer" /> 
</form> 


 
<?php
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']) && $_SERVER['PHP_AUTH_USER']=="dev" && $_SERVER['PHP_AUTH_PW']=="141526") {
	header ("Location: admin.php");
	exit();
 
}
else {
    sleep(2);
    header( 'WWW-Authenticate: Basic realm="Compte gestionnaire"' );
    header( 'HTTP/1.0 401 Unauthorized' ); 
    echo "<html><head><title>ACCES NON AUTORISÉ</title></head><body>";   
    echo "<center>Authentification nécessaire</center></html>";  
    exit;
}
?>

        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            #btn {        
                font-size: 15px;
                font-weight: bold;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                color: #0066cc;
            }

            h1 {
                text-align: center;
                color: black;
           
            }
        </style>
        </body>
</html>