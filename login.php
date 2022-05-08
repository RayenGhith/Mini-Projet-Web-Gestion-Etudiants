<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      include("connexion.php");
      $sel=$pdo->prepare("select * from enseignant where login=? and pass=? limit 1");
      $sel->execute(array($login,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
         " ".strtoupper($tab[0]["nom"]);
         $_SESSION["autoriser"]="oui";
         header("location:index.php");
      }
      else
         $erreur="Login/mot de passe incorrect";
   }
?>



<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="icon" href="download.png" >
<link rel="stylesheet" href="register.css" type="text/css " media="all"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body onLoad="document.fo.login.focus()">
	<div class="main-w3layouts wrapper">
    
		<h1>LOGIN</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			<div class="erreur"><?php echo $erreur ?></div>	
				<form  name="fo"method="post" action="">
				<input type="text" name="login" placeholder="Email" required="required"> <br>
				<input type="password" name="pass" placeholder="Mot de Passe" required="required"><br>
				
					
					<div class="g-recaptcha" data-sitekey="6LfgJtEfAAAAAGd7oP40_Lv62NInihN2lf35MbFU"></div>
					<input type="submit" name="valider" value="S'authentifier">
                    <div class="text-center"> Nouveau utilisateur? <a href="register.php">Créer un compte!</a> </div>
				</form>
				
			</div>
		</div>
</body>
</html>