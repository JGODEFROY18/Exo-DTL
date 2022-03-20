<?php include("ClasseUser.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulaire</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php  
      
    try {
        // Connexion a la BDD avec un PDO
        // PDO attend une ip de Mysql, le nom de la base.
        $bdd = new PDO('mysql:host=192.168.65.47;dbname=User', 'UserWEB', 'UserWEB');
        $req = "SELECT * from User";
        $reponses = $bdd->query($req); 

      } catch (Exception $e) {
          echo 'Exception reçue : ',  $e->getMessage(), "\n";
      }
      
      // Recuperation des donnée du formulaire et vérification avec les donnée enregistrée et affichage de l'état de connexion à l'utilisateur. 
      $Tableauuser = array();
      if(isset($_POST["Connexion"])){
          $trouve = false;
          foreach ($Tableauuser as  $Theuser)
      {
          if($TheUser->getNom()==$_POST['user_nom']){
              $trouve = true;
              if($Theuser->seconnecter($_POST['user_mdp'])){
                  ?>
                  <h2>Vous etes connecté</h2>
                  <?php
              }else{
                  ?>
                  <h2>Mauvais Mot de passe</h2>
                  <?php
              }
          }
      }
      if(!$trouve){
          echo "User Inconnu vérifier othographe";
      }
      }
      // affichage du formulaire de connexion 
?>
    <form action="" method="post" >
        <div>
            <label for="name">Name</label>
            <input type="text" name="user_name" id="name" required>
        </div>
        <div>
            <label for="Password">Password</label>
            <input type="text" name="user_password" id="Password" required>
        </div>
        <div>
            <input type="submit" value="Connexion" name="Connexion">
        </div>
    </form>
</body>