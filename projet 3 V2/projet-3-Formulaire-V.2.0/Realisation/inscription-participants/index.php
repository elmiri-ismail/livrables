<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   form {background-color:#DDD;
        width:400px;
        padding:30px}
   input,label {margin:3px;
        padding:4px}
    button {cursor:pointer;}
</style>
<body>
    <h1>Formulaire d'inscription</h1>
    <form action="affichage.php" target="_blank" method="post" >
        <label for="" >Nom</label><br>
        <input name="nom" type="text"><br><br>
        <label for="" >Prénom</label><br>
        <input name="prénom" type="text"><br><br>
        <label for="" >Email</label><br>
        <input name="email" type="text"><br><br>
        <button type="submit">Enregistrer</button>
    </form>
    
</body>
</html>