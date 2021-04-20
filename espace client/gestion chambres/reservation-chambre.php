<?php

require_once "./../../connection.php";

$req1 = "SELECT * FROM chambre WHERE Id_chambre = '".$_GET["idChambre"]."'";
$result1 = $con->query($req1);

foreach($result1 as $row) { 
    $numChambre = $row["Num_chambre"];
    $prix = $row["Prix"];
    $nbrPers = $row["Nombre_personne"];
    $imgUrl = $row["Image"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="./../../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="form.css"/>


</head>
<body style="background-image: url('./../../assets/img/ii.jpg'); background-size: cover;">
>
 





  <div class="container" style="margin-top: 130px; ">

  
  

    <div class="card mb-7" style="max-width: 1100px">
      <div class="container">
        <div class="row g-0">
          <div class="col-md-4" style="margin-top: 40px;">
            <img src="<?php echo $imgUrl?>" class="img-fluid"/> <br> <br>
            <h5><span style="color: #3882c7;">N chambre : </span><?php echo $numChambre ?></h5>
            <h5><span style="color: #3882c7;">Prix : </span><?php echo $prix ?></h5>
            <h5><span style="color: #3882c7;">Nombre Per : </span><?php echo $nbrPers ?></h5>
          </div>
          <div class="col-md-8">

            <div class="card-content">
              <br>
              <h3 style="color: #343a40;"><b>Reservation</b></h3>
              <br>

                <form method="POST" action="./reservation.php">
                  
                  <div class="row form-group">
				      			<div class="col-sm-6"> 
                      <input type="text" class="form-control" name="cin" placeholder="CIN ..." required>
                    </div>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="email" placeholder="email ..." required>
                    </div>
                  </div>

                  <div class="row form-group">
				      			<div class="col-sm-6"> 
                      <input type="text" class="form-control" name="nom" placeholder="nom ..." required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="prenom" placeholder="prénom ..." required>
                    </div>
                  </div>

                  <div class="row form-group">
				      			<div class="col-sm-6"> 
                      <input type="text" class="form-control" name="telephone" placeholder="telephone ..." pattern="[0]{1}[5-7]{1}[0-9]{8}" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="adresse" placeholder="adresse ..." required>
                    </div>
                  </div>

                  <div class="row form-group">
				      			<div class="col-sm-6"> 
                      <input type="text" class="form-control" name="ville" placeholder="ville ..." required>
                    </div>
                  </div>

                  <div class="row form-group">
				      			<div class="col-sm-6"> 
                      <input type="date" min="<?php echo date("Y-m-d"); ?>" class="form-control" name="datedebut" placeholder="date début ..." required>
                    </div>
                    <div class="col-sm-6">
                      <input type="number" min="1" class="form-control" name="duree" placeholder="nombre des jours ..." required>
                    </div>
                  </div>

                  <br>

                  <div class="row form-group">
				      			<div class="col-sm-6"> 
                      <button name="reserver" type="submit" class="btn btn-default" style="background-color: #343a40; color:white; width:200px">Réserver</button>
                    </div>
                  </div>
              
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>