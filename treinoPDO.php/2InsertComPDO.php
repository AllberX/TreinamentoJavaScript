<?php

// Listagem 2: Insert usando PHP PDO

  /* Podemos ver que não muda muita coisa no código, apenas a forma como é gerado, usando try..catch e as funções de comunicação também, 
  mas de resto continua bem parecida.

Nota: Essa maneira é a considerada ideal pela maioria dos desenvolvedores PHP hoje em dia, mas também existe a mysqli, 
que funciona bem parecido com a mysql, com a diferença de um “i” no final. */

try {
  $pdo = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO minhaTabela (nome) VALUES(:nome)');
  $stmt->execute(array(
    ':nome' => 'Ricardo Arrigoni'
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();



//fonte do treinamento: https://www.devmedia.com.br/crud-com-php-pdo/28873
   ?>