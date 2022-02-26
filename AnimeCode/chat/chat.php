<?php 
  session_start();
  require_once 'backend/chat.php';

  // Si la personne ne s'est pas connectée 
  if(!isset($_SESSION['user']))
  {
      header('Location: index.php');
      die();
  }

  // On appel la methode getMessage()
  $chat = new Chat();
  $msg = $chat->getMessage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>AnimeCode - Chat
    </title>
</head>
    <body>

    <h1>Messagerie Instantanée</h1>
        <div id="contain">
        <?php 
            // On affiche les messages
            for($i = 0; $i < count($msg['chat']); $i++)
            {
        ?>
            <div class="container">
                <p><?php echo $msg['chat'][$i]['message']; ?></p>
                <span class="time-right"><?php echo $msg['chat'][$i]['pseudo']." &mdash; ".$msg['chat'][$i]['date'];?></span>
            </div>
        <?php 
            }
        ?>
        </div>

        <form action="backend/send.php" method="POST">
            <input type="text" name="msg" placeholder="Message" autocomplete="off" maxlenght="50"class="form-input"/>
            <br>
            <button type="submit">Envoyer</button>
        </form>
       
    </body>
</html>


<style>
    
    ::selection {
        background-color: #320E3B;
        color: #702a85;
    }


    ::-webkit-scrollbar {
        background-color: #702a85;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #320E3B;
    }

    body {
        background: #222;
    }

    h1 {
        text-align: center;
    }

    #contain {
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
        text-align: center;
        height: 500px;
        overflow-y: scroll;
        border: solid 5px #702a85;
        width: 800px;
    }

    .container {
        background-color: #702a85;
        margin-left: auto;
        margin-right: auto;
        display: block;
        text-align: center;
        border: solid 2px #320E3B;
        margin-top: 50px;
        font-weight: bold;
        width: 700px;
        height: 100px;
        padding: 20px;
        border-radius: 5px;
    }


    form {
        text-align: center;
    }

    input {
        width: 90%;
        height: 30px;
        border: solid 3px #702a85;
        background: #320E3B;
        border-radius: 10px;
    }

    button {
        width: 150px;
        height: 30px;
        border: solid 2px #320E3B;
        background: #702a85;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        }
    
</style>