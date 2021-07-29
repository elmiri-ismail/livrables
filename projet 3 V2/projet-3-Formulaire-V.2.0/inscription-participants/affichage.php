<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [];
 $prenom= [];
 $email= [];



 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $nom;
 }

 if( isset( $_SESSION['prenom'] ) ) {
    $prenom =  $_SESSION['prenom'] ;
 }else {
    $_SESSION['prenom'] =  $prenom;
}

 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }else {
    $_SESSION['email'] =  $email;
 }
 


 // Ajouter le nom du nom dans le tableau
 $nom[] = $_POST["nom"] ;
 $prenom[] = $_POST["prenom"] ;
 $email[] = $_POST["email"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $nom;
$_SESSION['prenom'] =  $prenom;
$_SESSION['email'] =  $email;
?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="print" href="media.css">
</head>

<body>
    <div class="row">
    <div class="col-md-3">
<h1>NOM</h1>
<ol>
    <?php
        foreach ($nom as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ol>
</div>
<div class="col-md-3">
<h1>PRENOM</h1>
<ul>
    <?php
        foreach ($prenom as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</div>
<div class="col-md-3">
<h1>Emails</h1>
<ul>
<?php
        foreach ($email as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?> 
   
</ul>
</div>
</div>
<button onclick="window.print()">Print</button>
</body>
</html>