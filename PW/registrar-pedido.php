<?php 

    $numero_cardapio = $_POST["numero_cardapio"];
    $nome_cliente = $_POST["nome_cliente"];
    $endereco = $_POST["endereco"];

    $query = "INSERT INTO pedidos(numero_cardapio, nome_cliente, endereco) VALUE('`$numero_cardapio`', '`$nome_cliente`', '`$endereco`');";
   
    $conexao = new mysqli("localhost", "root", "", "pizzaria");

    mysqli_query($conexao, $query);

?>