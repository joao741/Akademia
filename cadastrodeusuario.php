<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

?>   
    <h1>Meu site</h1>

    <h2>Cadastre-se já</h2>

    <form action="db/pessoa/insert.php" method="POST">
        <label for="nomecompleto">Nome Completo</label> <br>
        <input type="text" name="nomecompleto">         <br>
        <label for="email">E-mail</label>       <br>
        <input type="email" name="email">       <br>
        <label for="telefone">Telefone</label>  <br>
        <input type="text" name="telefone"> <br>
        <label for="endereco">Endereço</label>  <br>
        <input type="text" name="endereco"> <br>
        <input type="submit" value="Enviar">    <br><br>
    </form>
</body>
</html>