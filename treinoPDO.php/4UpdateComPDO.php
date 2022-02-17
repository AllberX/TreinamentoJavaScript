<?php

$id = 5;
$nome = "Novo nome do Ricardo";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('UPDATE minhaTabela SET nome = :nome WHERE id = :id');
  $stmt->execute(array(
    ':id'   => $id,
    ':nome' => $nome
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

/* 
Lembrando que estamos usando exemplos distintos em cada API, o que queremos é mostrar como funciona as funções do PDO, 
fique livre para adaptar ao seu projeto da maneira que achar melhor. */

//fonte do treinamento: https://www.devmedia.com.br/crud-com-php-pdo/28873
?>