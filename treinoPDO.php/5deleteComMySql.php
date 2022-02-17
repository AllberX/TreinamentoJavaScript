<?php
    $id = $_GET["id"];
    include_once 'conexao.php';

    $sql = "delete from cliente where idcliente = ".$id;

    if(mysql_query($sql,$con)){
        $msg = "Deletado com sucesso!";
    }else{
        $msg = "Erro ao deletar!";
    }
    mysql_close($con);

    /*
    A função de delete é praticamente igual ao insert na prática, a diferença é que ao invés de inserir dados, vamos estar excluindo eles da tabela, 
    para isso precisamos identificar o registro de alguma maneira(normalmente usamos o próprio ID do registro) para então excluir da tabela.

Excluindo dados usando o mysql_ 
*/

//fonte do treinamento: https://www.devmedia.com.br/crud-com-php-pdo/28873
    ?>