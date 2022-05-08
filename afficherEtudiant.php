<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>SCO-ENICAR Afficher Etudiants</title>
     <link rel="stylesheet" href="style.css">

</head>
<body>
     
<main role="main">
        <div class="jumbotron">
            <div class="container">
            <img src="download.png" >
            
             <h1 class="display-4">Liste des étudiants</h1>
              <p>Cliquer sur le bouton afin d'actualiser la liste!</p>
            </div>
          </div>

<div class="container">
<div class="row">
<div class="table-responsive"> 
 <table class="table table-striped table-hover">
     <!--Ligne Entete-->

     <tr>
         <th>
             CIN  &thinsp;
         </th>
         <th>
             Nom     
         </th>
         <th>
             Prénom    
         </th>
         <th>
             Email    
         </th>
         <th>
             Classe
         </th>
     </tr>
     <!--1er Etudiant-->
 <?php
 include("connexion.php");
  global $pdo;
$sel=$pdo->prepare("SELECT * FROM etudiant  ");
$sel->execute();
while($etudiants = $sel->fetch(PDO::FETCH_ASSOC)){
  $cin = $etudiants['cin'];
  $nom = $etudiants['nom'];
  $prenom = $etudiants['prenom'];
  $email = $etudiants['email'];
  $classe = $etudiants['Classe'];
?>
     <tr>
         <td>
             <?php echo $cin?>
         </td>
         <td>
              <?php echo $nom?>
         </td>
         <td>
              <?php echo $prenom?>
         </td>
         <td>
              <?php echo $email?>
         </td>
         <td>
              <?php echo $classe?>
         </td>
     </tr>
   
<?php
}
?>
 </table>
 <br>
 </div>
 <button  type="button" onload="refresh()" class="btn btn-primary btn-block active">Actualiser</button>
</div>
</div>

</main>

  
</body>
</html> 
