<?php

$SERVER = "DESKTOP-HHB99QT\SA"; // Escapa la barra invertida en el nombre del servidor
$CONNECT = array(
    "Database" => "Techgenius_Distribution_SA",
    "UID" => "sa", // Cambié "Usuario" a "UID"
    "PWD" => "1234" // Cambié "contraseña" a "PWD"
);

// Establecer la conexión
$conexion = sqlsrv_connect($SERVER, $CONNECT);



?>
