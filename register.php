<?php
   session_start();
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$repass=$_POST["repass"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      if(empty($nom)) $erreur="Nom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($login)) $erreur="Login laissé vide!";
      elseif(empty($pass)) $erreur="Mot de passe laissé vide!";
      elseif($pass!=$repass) $erreur="Mots de passe non identiques!";
      else{
         include("connexion.php");
         $sel=$pdo->prepare("select id from enseignant where login=? limit 1");
         $sel->execute(array($login));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="Login existe déjà!";
         else{
            $ins=$pdo->prepare("insert into enseignant(nom,prenom,login,pass) values(?,?,?,?)");
            if($ins->execute(array($nom,$prenom,$login,md5($pass))))
               header("location:login.php");
         }   
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->

<link rel="stylesheet" href="register.css" type="text/css " media="all"> 
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>INSCRIPTION</h1>
		
		<div class="main-agileinfo">
	
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="nom" placeholder="Nom" required="">
					<input class="text" type="text" name="prenom" placeholder="Prenom" required="">
					<input class="text " type="Login" name="login" placeholder="Login" required="">
                    
				<input class="text" type="password" name="pass" placeholder="Mot de passe" required="">
					<input class="text w3lpass" type="password" name="repass" placeholder="Confirmer Mot de passe" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span> J'accepte les termes & les Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="valider" value="S'INSCRIRE">
				</form>
				
			</div>
		</div>
		
		
		
</body>
</html>