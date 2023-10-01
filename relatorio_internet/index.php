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
    printf("Conexão com bando de dados bem sucedida!");

    $_retval_01 = mysqli_select_db($_minha_conexao, "ping_run");
    if (!$_retval_01) {
        die("Não foi possivel encontrar o banco de dados </br>". mysqli_error($_minha_conexao));
    }
    
    mysqli_select_db($_minha_conexao, 'ping_run');
    $_SQL_comando = "SELECT _data, status_local, status_wire FROM registro_ping";
    $_retval_02 = mysqli_query($_minha_conexao, $_SQL_comando);
    if(! $_retval_02) {
        die('</br>Não foi possível obter os dados </br>'. mysqli_error($_minha_conexao));
    }
    
    


    ?>
<body>
    
</body>
</html>