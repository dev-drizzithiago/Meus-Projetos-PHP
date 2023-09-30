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
    $_minha_conexao = new mysqli($_dbhost, $_dbuser, $_dbpass);
    if ($_minha_conexao -> connect_errno) {
        print("Falha na Conexão com o banco de dados: %s</br>". $_minha_conexao->connect_errno);
        exit();
    }
    printf("Conexão bem sucedida!");
    $_retval = mysqli_select_db($_minha_conexao, 'ping_run');
    if(! $_retval) {
        die('Não foi possível selecionar o banco de dados');
    }
    echo "</br>Banco de dados 'ping_run' selecionado!"



    ?>
<body>
    
</body>
</html>