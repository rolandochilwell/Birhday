<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement php</title>
</head>
<body>
    <?php
    if ($-SERVER["Request-method]==post"){
        $nom= html special ($-post["nom"])
        $nombre= html special ($-post["nombre"])
        echo <p><Nom:$nom</p>;
        echo <p>Nombre:$nombre</p>;
    }
</body>
</html>