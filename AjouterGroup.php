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
    <title>Ajouter Groupe</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<div class="container">
   
        <div class="title">Ajouter Groupe</div>
        <form id="myForm" method="POST">
            <div class="user-details">
            <div class="input-box">
                    <span class="details"  >ID </span>
                    <input type="number" id="id" name="id"  placeholder="Entrer l'ID de groupe" required >
                </div>
                <div class="input-box">
                    <span class="details"  >Groupe</span>
                    <input type="text" id="classe" name="classe" placeholder="Entrer le Nom de groupe" required >
                </div>
            </div>
                <button type="button" onclick="ajouter()">Ajouter</button>
            
       <div id="demo"></div>
<script>
    function ajouter()
    {
        var xmlhttp = new XMLHttpRequest();
        var url="http://localhost/Newfolder/Ajoutgroupe.php";
        
        //Envoie Req
        xmlhttp.open("POST",url,true);

        form=document.getElementById("myForm");
        formdata=new FormData(form);

        xmlhttp.send(formdata);

        //Traiter Res

        xmlhttp.onreadystatechange=function()
            {   
                if(this.readyState==4 && this.status==200){
                // alert(this.responseText);
                    if(this.responseText=="OK")
                    {
                        document.getElementById("demo").innerHTML="L'ajout de groupe a été bien effectué";
                        document.getElementById("demo").style.backgroundColor="white";
                    }
                    else
                    {
                        document.getElementById("demo").innerHTML="Le groupe exsiste déjà , merci de vérifier ID";
                        document.getElementById("demo").style.backgroundColor="#fba";
                    }
                }
            }
        
        
    }
    </script>
             
              
    
</body>
</html>