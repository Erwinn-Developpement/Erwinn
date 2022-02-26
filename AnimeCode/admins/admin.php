<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeCode Admins</title>
</head>
<body>
    
  

<!doctype html>
<html lang="en">
  <head>
    <title>Espace Administration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        
    

<div class="tableau">
  <h1>Membres Inscrits :</h1>

    <h2 style="text-align: center;">Classement en fonction du temps, pseudo et date d'inscription.</h2>

  <div class="option">
  <?php try
  {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=login;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }
  
  // Si tout va bien, on peut continuer
  
  // On récupère tout le contenu de la table recipes
  $sqlQuery = 'SELECT * FROM utilisateurs';
  $recipesStatement = $mysqlClient->prepare($sqlQuery);
  $recipesStatement->execute();
  $recipes = $recipesStatement->fetchAll();
  
  // On affiche chaque recette une à une
  foreach ($recipes as $recipe) {
  ?>
      <p><?php echo $recipe['id']; ?> <hr></p>
  <?php
  }
  ?>
  </div>

  <div class="option">
  <?php try
  {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=login;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }
  
  // Si tout va bien, on peut continuer
  
  // On récupère tout le contenu de la table recipes
  $sqlQuery = 'SELECT * FROM utilisateurs';
  $recipesStatement = $mysqlClient->prepare($sqlQuery);
  $recipesStatement->execute();
  $recipes = $recipesStatement->fetchAll();
  
  // On affiche chaque recette une à une
  foreach ($recipes as $recipe) {
  ?>
      <p><?php echo $recipe['pseudo']; ?> <hr></p>
  <?php
  }
  ?>
  </div>

  <div class="option">
  <?php try
  {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=login;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }
  
  // Si tout va bien, on peut continuer
  
  // On récupère tout le contenu de la table recipes
  $sqlQuery = 'SELECT * FROM utilisateurs';
  $recipesStatement = $mysqlClient->prepare($sqlQuery);
  $recipesStatement->execute();
  $recipes = $recipesStatement->fetchAll();
  
  // On affiche chaque recette une à une
  foreach ($recipes as $recipe) {
  ?>
      <p><?php echo $recipe['date_inscription']; ?><hr></p>
  <?php
  }
  ?>
  </div>



</div>



       
                      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<style>

  body {
    background: #222;
    color: black;
  }

  h1 {
    text-align: center;
    margin-bottom: 50px;
  }

  .tableau {
    border: solid 2px #320E3B;
  }

  .name {
      display: ;
      margin-left: auto;
      margin-right: auto;
      font-size: 25px;
  }
  .option{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    display: inline-block;
  }

  .option p {
    display: inline-block;
    font-size: 30px;
    margin: 20px;
    margin-left: 5%;
  }


</style>
</body>
</html>