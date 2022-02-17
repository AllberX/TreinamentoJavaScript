<?php
    /* Para atualizar um registro na tabela do banco de dados utilizamos o comando UPDATE em SQL, só que essa parte é um pouco mais complexa, 
    pois na verdade você vai precisar listar os registros, para ai sim escolher o que quer editar e atualizar.

No nosso exemplo não irei me atentar na forma de receber esses dados para ai sim atualizar em si, 
vamos dar ênfase apenas em como fazer o nosso código de atualizar.

Para fazer a atualização usando a API mysql é só fazer assim: */

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $id = $_POST["id"];

    include_once 'conexao.php';

    $sql = "update cliente set
            nome = '".$nome."', email = '".$email."',telefone = '".$tel."'
            where idcliente = ".$id;

    if(mysql_query($sql,$con)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysql_close($con);




//fonte do treinamento: https://www.devmedia.com.br/crud-com-php-pdo/28873
    ?>