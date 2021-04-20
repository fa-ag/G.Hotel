<?php


require_once "./../../connection.php";

if(isset($_POST["chercher"])) {
    
        $req1 = "SELECT * FROM chambre, categorie 
            WHERE chambre.Code_categorie = categorie.Code_categorie 
            AND categorie.Libelle = '".$_POST["categorie"]."'
            AND chambre.Nombre_personne = '".$_POST["nbrPers"]."'";
        $result1 = $con->query($req1);
  
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
    
    <link rel="stylesheet" href="main.css">
</head>
<body >


<!-- header -->
    <header class = "header" style="background-image: url('./../../assets/img/A.jpg');">

            <div class = "head-top" ></div>

            <div class = "head-bottom flex">
                <h2 ><strong>LES SUITES </strong></h2>
                <p>Notre hôtel de luxe
                    et de l’esprit balnéo chic
                    est sans pareille!</p>
                
            </div>
</div>
            
        </header>
        <h1>Les Suites</h1>
      

        <div class="row my-5">
            <?php foreach($result1 as $row) { ?>
                <div class="row" style="margin: 80px;">

                <div class="card" style="width: 20rem;">
                <a class="portfolio-box" href="../../../assets/img/A.jpg">
                    <img class="img-fluid" src="./../../assets/img/A.jpg" alt="" /></a>  
                    <div class="card-body" style="background: #31adc1ad;">
                    <h3 style="color: #fff;"><b><b>Suite Royal</b></b></h3>
                    <p class="card-text"style="color: #fff" >N°<?php echo $row['Num_chambre'] ?></p>                

                    <p style="color: #fff" ><?php echo $row['Description'] ?></p>   

   
                    <button type = "button" class = "btn" style="background:#fff;">Plus d'info</button>  
          
                    <button type="button" class="btn " style="background:#fff">
                    <a  style="text-decoration: none; color:black;" 
                        href="./reservation-chambre.php?idChambre=<?php echo $row['Id_chambre']?>">reserver la chambre</a>
                </button>

                  </div>
</div>
              </div>
              <?php } ?>

            </div>
            </div>
        </div>
    </div>
    
</body>
</html>