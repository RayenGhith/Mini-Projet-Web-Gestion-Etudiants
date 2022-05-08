<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue=" Bonjour ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";
   else
      $bienvenue="Bonjour ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";    
?>
<?php


$randomThings = array(
  '   Its a good day!',    
  '   Everything is alright!',    
  '   Today is like one of those fly dreams!',    
  '   Good luck on your mission!',    
  '   You are doing awesome!',    
  '   Sending some good vibes and happy thoughts your way.',    
  '   Don’t forget to be awesome.',    
);

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="download.png"  >
    <link rel="stylesheet" href="index.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SCO-ENICAR</title>
   </head>
<body>
 <!-- <div id="player">
    <audio controls autoplay hidden>
     <source src="TLOU.mp3" type="audio/mpeg">
                unsupported !! 
    </audio>
</div> -->


  <div class="sidebar close">
    <div class="logo-details">
      <i class="bx bxl-c-plus-plus"></i>
      <span class="logo_name">Sco-Enicar</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class="bx bx-grid-alt" ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="bx bx-collection" ></i>
            <span class="link_name">Etudiants</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Etudiants</a></li>
          <li><a href="AjouterEtudiant.php">Ajouter Etudiant</a></li>
          <li><a href="chercherEtudiant.php">Chercher Etudiant</a></li>
          <li><a href="modifierEtudiant.php">Modifier Etudiant</a></li>
          <li><a href="supprimerEtudiant.php">Supprimer Etudiant</a></li>
        </ul>
      </li>
      <li>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Groups</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="bx bx-collection" ></i>
            <span class="link_name">Groupes</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Groupes</a></li>
          <li><a href="AjouterGroup.php">Ajouter Groupe</a></li>
          <li><a href="supprimerGroup.php">Supprimer Groupe</a></li>
          <li><a href="afficherEtudiantsParGroup.php">Afficher tous les étudiants  Par group</a></li>
          <li><a href="afficherEtudiant.php">Afficher tous les étudiants</a></li>
        </ul>
      </li>
      <li>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Absences</a></li>
        </ul>
      </li> 
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="bx bx-collection" ></i>
            <span class="link_name">Absences</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Absences</a></li>
          <li><a href="SaisirAbsence.php">Afficher Absence</a></li>
          <li><a href="afficherAbsence.php">Saisir Absence</a></li>
          <li><a href="Etat_dabsences_Groupe.php">Etat des absences pour un  Groupe</a></li>
        </ul>
      </li>
       <li>
    <div class="profile-details">
      <div class="profile-content">
      </div>
      <div class="name-job">
        <div class="profile_name"> <a href="deconnexion.php">Se déconnecter</a></div>
      </div>
      <i class="bx bx-log-out" ></i>
    </div>
  </li>
</ul>
  </div>
  
  <section class="home-section">
    <div class="home-content">
      <i class="bx bx-menu" ></i>
      <h3><?php echo $bienvenue?></h3> 
        </div>
        <?php echo $randomThings[mt_rand(0,count($randomThings)-1)];?>
        </section>
 
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script> 
  
  
  
  </body>
</html>