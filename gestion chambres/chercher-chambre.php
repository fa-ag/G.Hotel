<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="./../../assets/css/bootstrap.min.css"/>
</head>
<body>
    
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">

                <form method="POST" action="afficher-chambres.php" class="d-flex col-lg-12">

                    <div class="dropdown col-lg-3">
                        <label class="bmd-label-floating" style="color: white;">Categorie chambre</label> 
                        <select name="categorie" class="form-control" required>			  
                            <option></option>
                            <option>Standard</option>
                            <option>Suite</option>
                            <option>Premium</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label class="bmd-label-floating" style="color: white;">Nombre de personne</label>
                        <select class="form-control"  name="nbrPers" id="ValidationTypeStage" required>			  
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>


                    <div class="dropdown col-lg-3">
                        <label class="bmd-label-floating" style="color: white;">Prix</label> 
                        <input name="prix" min="0" type="number" class="form-control">
                    </div>

                    <div class="col-lg-3">
                        <button class="btn btn-primary btn-sm" type="submit" name="chercher">Chercher</button>
                    </div>

                </form>
            </div>
        </nav>


    <div class="container">
    
    </div>

    <script src="./../../assets/js/bootstrap.min.js"></script>
</body>
</html>