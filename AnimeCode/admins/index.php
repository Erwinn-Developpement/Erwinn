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
        
        <div class="login-form">
            
            
        <form method="">
                <h2 class="text-center">Connexion Admins</h2>       
                <div class="form-group">
                    <form  method="POST">
                <input class="form-control" type="password" placeholder="Code" name="code" id=pwd  required>
                </div>
                <div class="form-group">
                    <form  method="POST">
                    </div>
                <div class="form-group">
                    <button type="submit" name="resolve" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
        </div>


        <?php

        if(isset($_POST['resolve'])){
          $code = $_POST['code'];

            if($code == "salut"){

                header('Location: ../admins/admin.php');
      }  
            if ($code == "goubliélemdp"){
                echo "<h1 >Le mot de passe est : salut</h1>";
            }

            if ($code <> 'salut' or 'goubliélemdp'){
                echo "<h1 >Qui es-tu ? Comment es-tu arrivé jusqu'ici ?</h1>";
            }
      
      }?>


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
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }

            h1 {
                text-align: center;
                color: black;
            }
        </style>
        </body>
</html>


