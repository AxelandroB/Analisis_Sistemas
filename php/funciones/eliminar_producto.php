<?php
require_once '../env.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM Productos WHERE ID = ?";
    $stmt = sqlsrv_prepare($conexion, $query, array(&$id));

    if ($stmt && sqlsrv_execute($stmt)) {
        echo json_encode(['status' => 'ok']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No se pudo eliminar el producto']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID no recibido']);
}

sqlsrv_close($conexion);
?>
