<?php
// ====== Configuração da Conexão com o Banco de Dados ======

$host = "localhost";        // Servidor local
$usuario = "root";          // Usuário do MySQL (padrão no XAMPP)
$senha = "";                // Senha (em branco por padrão no XAMPP)
$banco = "mirror_fashion";  // Nome do banco criado

try {
    // Conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);

    // Definir modo de erro para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mensagem opcional de sucesso (podes remover em produção)
    // echo "✅ Conexão com banco de dados bem-sucedida!";
} 
catch (PDOException $e) {
    // Caso ocorra erro, exibe mensagem
    die("❌ Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
