<?php
header('Content-Type: application/json');
$pdo = new PDO("mysql:dbname=antigua;host=127.0.0.1","jorge","rocko5744");
//seleccionar los eventos del calendario
$sentencia = $pdo->prepare("SELECT * FROM Eventos");
$sentencia->execute();

$resul = $sentencia->fetchALL(PDO::FETCH_ASSOC);
echo json_encode($resul);
?>