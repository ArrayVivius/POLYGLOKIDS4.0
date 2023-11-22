<!DOCTYPE html>
<html>
<head>
    <title>Insertar datos en MySQL con PHP</title>
</head>
<body>

<?php

    $servername = "nombre_del_servidor";
    $username = "nombre_de_usuario";
    $password = "contraseña";
    $dbname = "nombre_de_la_base_de_datos";
    

    $conn = new mysqli($servername, $username, $password, $dbname);
    

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
    

    $nombre = "John Doe";
    $fecha = "2022-01-01";
    $asistencia = "Presente";
    

    $sql = "INSERT INTO tabla_asistencia (nombre, fecha, asistencia) VALUES ('$nombre', '$fecha', '$asistencia')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
    

    $conn->close();
?>

</body>
</html>