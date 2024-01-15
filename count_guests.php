<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>countGuests</title>
</head>
<body>
    <?php
    $host= "localHost";
    $user= "root";
    $database= "mybirthday";
    $password= "";
    $connection= new mysqli($host, $user, $password, $database);
    if($connection->connect_error){
        die("erreur de connexion à la base de données:". $mysqli->connect_error);
        $sql= "SELECT SUM(Nombre) as totalGuests FROM birtday-guests";
        $resultat= $connection->query(sql);
        if ($resultat){
            $donnees= $resultat->fetch_assoc();
            $nombreTotal= $donnees['totalGuests'];
            echo $nombreTotal;
            }
            else{
                echo "Erreur lors de la récupération du nombre total d'invités:". $mysqli->error;
            }
            $connection->close();
</body>
</html>