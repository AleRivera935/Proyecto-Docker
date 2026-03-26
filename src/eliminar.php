<?php
require 'conexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $pdo->prepare("DELETE FROM registros WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: index.php");
exit;
?>