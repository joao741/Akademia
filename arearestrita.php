<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Academia</title>

</head>

<body>

    <?php

        include_once("assets/components/cabecalho.html");

    ?>

<h2>Área Restrita</h2>

<form action="assets/db/pessoa/insert.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="email">E-mail</label>
        <input type="email" name="email">
        <input type="submit" value="Enviar">
    </form>