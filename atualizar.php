<?php
require 'conexao.php';

$id = 1;
$nova_especialidade = "Dermatologia";

$stmt = $pdo->prepare("UPDATE consultas SET especialidade = ? WHERE id = ?");
$stmt->execute([$nova_especialidade, $id]);