<?php
include "conexion.php";

$id = $_POST['Id'];
$nombre = $_POST['Nombre'];
$tipo = $_POST['Tipo_Producto'];
$proveedor = $_POST['Proveedor'];
$marca = $_POST['Marca'];

$sql = "UPDATE Productos SET Nombres = ?, ID_Tipos_de_Productos = ?, ID_Proveedores = ?, Marca = ? WHERE ID = ?";
$params = array($nombre, $tipo, $proveedor, $marca, $id);
$stmt = sqlsrv_prepare($conn, $sql, $params);

if ($stmt && sqlsrv_execute($stmt)) {
    echo json_encode(["status" => "ok"]);
} else {
    if (($errors = sqlsrv_errors()) != null) {
        echo json_encode(["status" => "error", "message" => $errors[0]['message']]);
    } else {
        echo json_encode(["status" => "error", "message" => "No se pudo modificar el producto"]);
    }
}
?>
    