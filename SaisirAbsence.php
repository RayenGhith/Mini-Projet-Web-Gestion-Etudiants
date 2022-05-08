<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="download.png" >
        <title>Saisir Absence</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
    <section>
    <div class="container">
    <form>
      <table class=>
        <tr><td>Date de début (j/m/a) : </td> <td>
        <input type="date" name="debut"  size="10" value="01/09/2021" class="datepicker"/>
        </td></tr><tr><td>Date de fin : </td><td>
        <input type="date" name="fin" size="10" value="12/03/2022" class="datepicker"/><br>
          </td></tr></table>  <br>
    <div class="table-responsive"> 
      <td>choisir une classe : </td>
        <div class="form-group">
         <select id="classe" name="classe"  class="custom-select custom-select-sm custom-select-lg">
              <option value="1-INFOA">INFO1-A</option>
              <option value="1-INFOB">INFO1-B</option>
              <option value="1-INFOC">INFO1-C</option>
              <option value="1-INFOD">INFO1-D</option>
              <option value="1-INFOE">INFO1-E</option>
          </select>
          </div>
    <div style="overflow-x: auto;">
      <table class="table">
        <tr>
          <th>Nom </th>
          <th>Prénom</th>
          <th>Justifiées</th>
          <th> Non Justifiées</th>
          <th>Total</th>
         
        </tr>
        <tr>
          <td>Ahmed</td>
          <td>Abid</td>
          <td>3</td>
          <td>4</td>
          <td> 7</td>
             </tr>

             <tr>
            <td>Takoua </td>
            <td>Amri</td>
            <td>1</td>
            <td>0</td>
            <td>1</td>
          </tr>
           <tr>
            <td>Aysha </td>
            <td>Hammami</td>
            <td>0</td>
            <td>23</td>
            <td>23</td>
          </tr>
          <tr>
            <td>Fekher </td>
            <td>Ammar</td>
            <td>7</td>
            <td>0</td>
            <td>7</td>
          </tr>
      </table>
    </div>
    </div>
    </form>
    </div>
    </section>
       
</body>
</html>