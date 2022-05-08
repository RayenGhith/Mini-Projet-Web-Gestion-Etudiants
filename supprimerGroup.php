<?php
   session_start();
   @$id=$_POST["id"];
   @$classe=$_POST["classe"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
    if(empty($id)) $erreur="id laissé vide!";
    elseif(empty($classe)) $erreur="classe laissé vide!";
      else{
         include("connexion.php");
         $sel=$pdo->prepare("DELETE FROM enseignant_groupe WHERE id = :id");
         $sel->bindValue(':id', $id);
         $sel->execute(); 
      }
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
    <link rel="icon" href="download.png" >
    <title>Supprimer Groupe</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
        <div class="title">Supprimer Groupe</div>
        <form id="myForm" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details"  >ID</span>
                    <input type="number" id="id" name="id"  placeholder="Entrer id de groupe  " >
                </div>
                <div class="input-box">
                    <span class="details"  >Classe</span>
                    <input type="text" id="classe" name="classe"  placeholder="Entrer nom de groupe  " >
                </div>
                <input type="submit" name="valider" value="Supprimer">
         
</body>
</html>   