<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="utf-8" />
        <title>Chercher des chambres</title>
        <link href="../assets/css/styles.css" rel="stylesheet"/>
    </head>
    <body class="">
              
        <form action="" method="POST">

            <div class="booking-form-box">
                <div class="booking-form">      
                    <div class="input-grp">
                        <label>Departure</label> 
                        <input type="date" class="form-control select-date">
                    </div>
                    <div class="input-grp">
                        <label>Arrivale</label> 
                        <input type="date" class="form-control select-date">
                    </div>
                    <div class="input-grp">
                        <label>type de chambre</label> 
                        <select class="custom-select">
                            <option value="standard">standard</option> 
                            <option value="suite">premium</option>
                            <option value="suite royale">suite</option>
                        </select><br>
                    </div>
                    <div class="input-grp">
                        <label>Adults</label> 
                        <select class="custom-select">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                        </select><br>
                    </div>
                    <div class="input-grp">
                        <label>Enfants</label> 
                        <select class="custom-select">
                            <option value="0">0</option>
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br>
                    </div>
    
                </div>
                </div><br><br>
                <div class="essay3">
                <a type="submit" class="btn btn-primary btn-xl js-scroll-trigger" href="#">Chercher !</a>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="../index.html">Revenire a l'acceuil</a>
            </div>
            
        </form>
    </body>
</html>



