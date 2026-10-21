<?php
require "conexao.php";

$id = 1;
$stmt = $pdo->prepare("DELETE FROM consultas WHERE id = ?");
$stmt->execute([$id]);