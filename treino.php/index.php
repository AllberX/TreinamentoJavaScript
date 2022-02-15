<form id="formulario" autocomplete="off" method="POST" action="exibedados.php"> <!-- -->
<link rel="stylesheet" href="style.css">

<!-- Área total do container do formulario-->
<div id="container"> 
<fieldset>
        <legend>Formulário</legend>
        <br><br>
    <input class="campo_pesquisar" type="search" name="pesquisar" placeholder="Pesquisar Ticket">  
        <br><br>
    <input class="campo_nome" type="text" name="nome" placeholder="Nome"> 
        <br><br>
    <input class="campo_sobrenome" type="text"  name="sobrenome" placeholder="Sobrenome"> 
        <br><br>
<div style="color: rgb(1, 46, 247) ; font-family: Arial, Helvetica, sans-serif;"><b>Sexo:</b></div> 
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select> 
        <br><br>
    <input class="campo_email" type="email" name="email" placeholder="Insira seu E-mail "> 
        <br><br>
    <input class="campo_idade" type="number" name="idade" placeholder="Digite sua idade">
        <br><br>
<div style="color: rgb(1, 46, 247) ; font-family: Arial, Helvetica, sans-serif;"><b>Conhece nossa empresa ?</b></div> 
<br> <div style="color: rgb(1, 46, 247) ; font-family: Arial, Helvetica, sans-serif;">
<b>SIM</b><input  type="radio" name="radio">  <b>NÃO</b><input  type="radio" name="radio"></div>
        <br><br>
    <input class="campo_url" type="url" name="redes" placeholder="Cole o link das suas redes sociais"> 
        <br><br>
    <input class="campo_tel" type="tel" name="tel" placeholder="Digite seu telefone"> 
        <br><br>
    <input class="campo_senha" type="password" name="senha" placeholder="Digite sua senha"> 
        <br><br>
    <input type="file" name="arquivo"> 
        <br><br>
<div style="color: rgb(1, 46, 247) ; font-family: Arial, Helvetica, sans-serif;"><b><label>Mensagem:</label></b></div>    
        <br><textarea name="msg" class="msg" cols="35" rows="8"></textarea> 
        <br><br> <br><br> <br><br> <br><br>      
    <button class="Enviar" type="submit">Enviar</button>  

</fieldset>
</div>
<!-- Área total do container do formulario-->
</form>