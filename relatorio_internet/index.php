<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informações da INTERNET</title>
</head>
    <h1>status da internet</h1>
<?php 
    $_dbhost = "localhost";
    $_dbuser = "root";
    $_dbpass = "";
    $minha_conexao = new mysqli($host, $_dbuser, $_dbpass);
    if ($minha_conexao -> connect_errno) {
        print("Falha na Conexão com o banco de dados");
        exit();
    }
    printf("Conexão bem sucedida!")


?>
<body>
    
</body>
</html>