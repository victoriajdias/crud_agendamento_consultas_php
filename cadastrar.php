<?php
require 'conexao.php';

$nome_cliente = "victoria";
$especialidade = "Cardiologia";
$data_consulta = "2023-10-15";
$horario = "10:00";

$stmt = $pdo->prepare("INSERT INTO consultas (nome_cliente, especialidade, data_consulta, horario) VALUES (?, ?, ?, ?)");
$stmt->execute([$nome_cliente, $especialidade, $data_consulta, $horario]);