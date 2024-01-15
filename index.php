<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.">
    <title>formulaire php</title>
</head>
<body>
    <form action="traitement.php"method="post">
    <label for= "nom">Nom: </label>
    <input type="text"id="Nom"name="nom"reguired>
    <br>
    <label for="nombre">Nombre:</label>
    <input type="number"id="nombre"name="nombre"reguired>
        <br>
        <input type="submit" value="Envoyer">
</form>
</body>
</html>