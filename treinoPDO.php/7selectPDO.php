<?php
$consulta = $pdo->query("SELECT nome, usuario FROM login;");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";
}

// é possível ver um código simples de exemplo de como executar um select no banco de dados usando PDO.


//fonte do treinamento: https://www.devmedia.com.br/crud-com-php-pdo/28873
?>