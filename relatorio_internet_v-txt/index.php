<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio Internet_v-txt</title>
</head>
<body>
    <?php 
        $_local_registro_on = "C:/wamp64/www/Meus Projetos/Meus-Projetos-PHP/relatorio_internet_v-txt/registro_ping_local_on.txt";
        $_internet_ping_on = "C:/wamp64/www/Meus Projetos/Meus-Projetos-PHP/relatorio_internet_v-txt/registro_ping_internet_on.txt";
        echo readfile("$_local_registro_on");
    ?>    
</body>
</html>