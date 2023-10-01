<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Informações da INTERNET</title>
</head>
    
<?php 
    $_dbhost = "localhost";
    $_dbuser = "root";
    $_dbpass = "";
    $_minha_conexao = new mysqli($_dbhost, $_dbuser, $_dbpass);
    if ($_minha_conexao -> connect_errno) {
        print("<p>Falha na Conexão com o banco de dados: %s</p></br>". $_minha_conexao->connect_errno);
        exit();
    }
    printf("<p>Conexão com bando de dados bem sucedida!</p></br>");

    $_retval_01 = mysqli_select_db($_minha_conexao, "ping_run");
    if (!$_retval_01) {
        die("<p>Não foi possivel encontrar o banco de dados </p></br>". mysqli_error($_minha_conexao));
    }
    
    mysqli_select_db($_minha_conexao, 'ping_run');
    $_SQL_comando = "SELECT _data, status_local, status_wire FROM registro_ping";
    $_retval_02 = mysqli_query($_minha_conexao, $_SQL_comando);
    if(! $_retval_02) {
        die('</br>Não foi possível obter os dados </br>'. mysqli_error($_minha_conexao));
    }
    ?>
    <body>
    <main>
    <h1>Status da internet</h1>
        <?php 
        while($linha = mysqli_fetch_array($_retval_02, MYSQLI_ASSOC)) {
                echo "<p> DATA: : {$linha['_data']} </p> </br>".
                "<p> Status Rede Local: {$linha['status_local']} </p> </br>".
                "<p> Status Internet: {$linha['status_wire']} </p> </br>".
                "---------------------------------------------</br>";
            } 
            ?>
    </main>
    </body>
</html>