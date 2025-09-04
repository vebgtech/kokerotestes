<?php
$host = "localhost"; 
$usuario = "root";
$senha = ""; 

// Lê o conteúdo do arquivo SQL
$sqlArquivo = "kokero.sql";
$sql = file_get_contents($sqlArquivo);

// Cria conexão
$conn = new mysqli($host, $usuario, $senha);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Executa múltiplas queries
if ($conn->multi_query($sql)) {
    echo "<p><strong>Banco de dados 'kokero' instalado com sucesso!</strong></p>";
    do {
        if ($resultado = $conn->store_result()) {
            $resultado->free();
        }
    } while ($conn->next_result());
} else {
    echo "<p><strong>Erro ao executar o script:</strong> " . $conn->error . "</p>";
}

$conn->close();

?>