<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    echo "Javieeer php mariadb <br>";

    $servername = "mariadb";
    $username = "root";
    $password = "toor";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=ejemplo", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado correctamente";
    } catch(PDOException $e) {
        echo "Fallo en la conexión: " . $e->getMessage();
    }
?>
</body>
</html>