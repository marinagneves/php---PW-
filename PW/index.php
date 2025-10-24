<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registra-pizza.php" method="POST">
        <input type="text" name="numero_cardapio">
        <input type="text" name="nome_pizza">
        <input type="text" name="ingredientes">
        <input type="text" name="preco">
        <input type="submit" value="Registar">
    </form>

    <form action="registrar-pedido.php" method="POST">
        <input type="text" name="numero_cardapio">
        <input type="text" name="nome_cliente">
        <input type="text" name="endereco">
        <input type="submit" value="Registar">
    </form>
</body>
</html>