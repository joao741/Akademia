<?php

    include_once("../conn.php");

    $sql = "SELECT * FROM cadastro";
    
    $result = $conn->query($sql); //executando a busca no banco de dados e armazenando o retorno na variável result

    if ($result-> num_rows > 0) //se o número de linhas de resultado for maior do que zero
    {
        echo "<table>"; //imprimir a abertura da tabela
        echo "<tr> <th>idcadastro</th> <th>nomecompleto</th> <th>email</th> <th>telefone</th> <th>endereco</th> <th>Detalhes</th> </tr>"; //imprimir o cabeçalho da tabela
        
        while ($linha = $result->fetch_assoc()) //pegar a próxima linha de dados
        {
            echo "<tr>"; //abrir a nova linha
            echo "<td>" . $linha["idcadastro"] . "</td>";
            echo "<td>" . $linha["nomecompleto"] . "</td>";
            echo "<td>" . $linha["email"] .  "</td>";
            echo "<td>" . $linha["telefone"] . "</td>";
            echo "<td>" . $linha["endereco"] . "</td>";
            echo "<td> <a href='select.php?telefone=" . $linha["telefone"] . "'>Detalhes</a> </td>";
            echo "</tr>"; //fechar a linha
        }    

        echo "</table>"; //fechar a tabela

    }
    else
    {
        echo "<p>Nenhum registro foi encontrado.</p>";
    }

    $conn->close();

?>