<?php

require_once "./../../connection.php";

if(isset($_GET["idChambre"])) {

    $req1 = "SELECT * FROM chambre WHERE Id_chambre = '".$_GET["idChambre"]."'";
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
</head>
<body>

    <ul>
        <?php foreach($result1 as $row) { ?>
        <li><?php echo $row['Num_chambre'] ?></li>
        <li><?php echo $row['Prix'] ?></li>
        <li><?php echo $row['Description'] ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>