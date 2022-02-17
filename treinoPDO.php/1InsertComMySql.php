<?php

//Antes de vermos como fazer com o PDO, iremos ver como inserir dados no banco de dados com a api mysql, a qual não é mais recomendado seu uso.
//Listagem 1: Inserindo dados na tabela com API mysql

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    include_once 'conexao.php';

    $sql = "insert into cliente values(null,
            '".$nome."','".$email."','".$tel."')";
    //echo $sql;

    if(mysql_query($sql,$con)){
        $msg = "Gravado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
    mysql_close($con);

    /* Como podemos ver é muito simples, mas foi considerado deprecated, 
    ou seja, foi descontinuado pela galera do PHP, vamos ver como podemos fazer o insert usando PHP PDO. */
 
    //fonte do treinamento: https://www.devmedia.com.br/crud-com-php-pdo/28873
?>

