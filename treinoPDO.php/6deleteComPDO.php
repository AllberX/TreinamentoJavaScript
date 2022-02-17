<?php
$id = 5;

try {
  $pdo = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('DELETE FROM minhaTabela WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

/*
Como podemos ver estamos utilizando o bindParam e caso utilize ele sempre deve ser passado uma variável no segundo parâmetro, 
caso contrario terá uma mensagem de erro.
*/

//fonte do treinamento: https://www.devmedia.com.br/crud-com-php-pdo/28873
?>