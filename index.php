<?php
require 'conexao.php';

$stmt = $pdo->query("SELECT * FROM consultas");
$consultas = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($consultas as $row) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Nome do Cliente: " . $row['nome_cliente'] . "<br>";
    echo "Especialidade: " . $row['especialidade'] . "<br>";
    echo "Data da Consulta: " . $row['data_consulta'] . "<br>";
    echo "Horário: " . $row['horario'] . "<br><br>";
}