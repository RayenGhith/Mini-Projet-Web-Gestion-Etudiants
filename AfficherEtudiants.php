 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="download.png"  >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>SCO-ENICAR Afficher Etudiants</title>
     <link rel="stylesheet" href="style.css">

</head>
<body onload="refresh()"  >
<main role="main">
        <div class="jumbotron">
            <div class="container">
              <h1 class="display-4">Liste des étudiants</h1>
              [<a href="afficherEtudiant.php">Afficher Etudiant</a>]
              <p id="demo">Liste vide</p>
              <button type="submit" onclick="refresh()">Actualiser</button>

<script>
    function refresh() {
        var xmlhttp = new XMLHttpRequest();
        var url = "http://localhost/Newfolder/afficher.php";

    //Envoie de la requete
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
//Traiter la reponse
     xmlhttp.onreadystatechange=function()
            {  // alert(this.readyState+" "+this.status);
                if(this.readyState==4 && this.status==200){
                
                    myFunction(this.responseText);
                    alert(this.responseText);
                    console.log(this.responseText);
                    //console.log(this.responseText);
                }
            }


    //Parse la reponse JSON
	function myFunction(response){
		var obj=JSON.parse(response);
        //alert(obj.success);

        if (obj.success==1)
        {
		var arr=obj.etudiants;
		var i;
		var out="<table  border=1 >";
		for ( i = 0; i < arr.length; i++) {
			out+="<tr><td>"+
			arr[i].cin +
			"</td><td>"+
			arr[i].nom+
			"</td><td>"+
			arr[i].prenom+
			"</td><td>"+
			arr[i].adresse+
			"</td><td>"+
			arr[i].email+
			"</td></tr>" ;
		}
		out +="</table>";
		document.getElementById("demo").innerHTML=out;
       }
       else document.getElementById("demo").innerHTML="Aucune Inscriptions!";

    }
}
</script>
<footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
  
</body>
</html> 
