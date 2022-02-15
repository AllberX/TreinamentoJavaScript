<?php
$var_pesquisar = $_POST ['pesquisar'];
echo  $var_pesquisar . '<br>';

$var_nome = $_POST ['nome'];
echo  $var_nome . '<br>';

$var_sobrenome = $_POST ['sobrenome'];
echo  $var_sobrenome . '<br>';

$var_sexo = $_POST ['sexo'];
echo  $var_sexo . '<br>';

//Condição If/Else para Masculino/Feminino
if($var_sexo == 'M'){
    echo  '<style>
    .caixa_exibição{
    width: 100px;
    height: 50px;
    border: solid 5px blue;
    }
    </style>';

}else {
    echo  '<style>
    .caixa_exibição{
    width: 100px;
    height: 50px;
    border: solid 5px pink;
    }
    </style>';
    }
//Condição If/Else para Masculino/Feminino    

$var_email = $_POST ['email'];
echo  $var_email . '<br>';

$var_idade = $_POST ['idade'];
echo  $var_idade . '<br>';

$var_radio = $_POST ['radio'];
echo  $var_radio . '<br>';

if($var_radio == 'on'){
    echo "conhece" . '<br>';  '<style>
    .caixa_exibição{
    width: 50px;
    height: 20px;
    border: solid 3px green;
    }
    </style>';

}else {
    echo " Não conhece" . '<br>'; '<style>
    .caixa_exibição{
    width: 50px;
    height: 20px;
    border: solid 3px red;
    }
    </style>';
    }

$var_redes = $_POST ['redes'];
echo  $var_redes . '<br>';

$var_tel = $_POST ['tel'];
echo  $var_tel . '<br>';

$var_senha = $_POST ['senha'];
echo  $var_senha . '<br>';

$var_arquivo = $_POST ['arquivo'];
echo  $var_arquivo . '<br>';

$var_msg = $_POST ['msg'];
echo  $var_msg . '<br>';
?>
<div class="caixa_exibição">
<?php
echo $var_nome . " <br> ";
?>