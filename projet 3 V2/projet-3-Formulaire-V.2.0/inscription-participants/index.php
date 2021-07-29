<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body {
       background-image:url(ward.jpg);
       background-repeat:no-repeat;
       height:100vh;
       background-size:cover;
       
   }
  
   form {
       background-image:url(ttt.jpg);
       background-size:cover;
        width:400px;
        padding:30px;
        margin :auto;
        border-radius:15px;
        opacity:0.8;
        }
   input,label {margin:3px;
        padding:4px;
        border-radius:20px}
    button {cursor:pointer;border-radius:20px}
    @media print{
	 #bt, h1 ,form{
		display: none;
	}
    
</style>
<body>
  
    <form action="affichage.php" target="_blank" method="post" >
    <h1>Formulaire d'inscription</h1>
        <label>Nom</label><br>
        <input name="nom" type="text"><br><br>
        <label>Prénom</label><br>
        <input name="prenom" type="text"><br><br>
        <label>Email</label><br>
        <input name="email" type="text"><br><br>
        <button type="submit">Enregistrer</button>
    </form>
    
</body>
</html>