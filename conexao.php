
<?php

$host = "localhost";
$banco = "agendamento_consultas";
$usuario = "root";
$senha = "MinhaSenhaNova123!";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
