<?php 

    $numero_cardapio = $_POST["numero_cardapio"];
    $nome_pizza = $_POST["nome_pizza"];
    $ingredientes = $_POST["ingredientes"];
    $preco = $_POST["preco"];

    $query = "INSERT INTO pizzas(numero_cardapio, nome_pizza, ingredientes, preco) VALUE('`$numero_cardapio`', '`$nome_pizza`', '`$ingredientes`', '`$preco`');";
    // crase muda de variavel para string, 
    // " ' ` ` ' ", $ = variavel

    $conexao = new mysqli("localhost", "root", "", "pizzaria");

    mysqli_query($conexao, $query);

?>