<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>Relatorio Internet_v-txt</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
date_default_timezone_set("America/Sao_Paulo");
    $_data_atual = date('H:i - d/m/Y');
    echo "<h1>Hora atual</br>$_data_atual</h1>";
?>
<body>
    <h1>STATUS DA REDE LOCAL</h1>
<main class="principal">
    <?php 
        $_local_registro_on = "registro_ping_local_on.txt";
        $_internet_ping_on = "registro_ping_internet_on.txt";
        if(file_exists($_local_registro_on)){
            $_lista_local_on = file_get_contents($_local_registro_on);
            $_lista_local_array = explode("-", $_lista_local_on);
            $_status_rede_on = $_lista_local_array[1];
            //echo $_status_rede_on;
            //foreach($_status_rede_on as $_lista_itens_local_on) {}
            if ($_status_rede_on == " Ativo ") {
                echo "<p>$_status_rede_on</p>"."</br>";
            } else {
                echo "teste";
            }
                
        } else {
            $_lista_local_on = null;
            echo "<p>Não foi encontrado nenhum arquivo de registro </br></p>";
            echo "<p>Inicie o problema para obter as informações da sua rede</p>";
        }
    ?>  
</main>
</body>
</html>


<!--scripts em pousa-->
<?php 
                //echo "<ul>";
                //echo "<li>$_lista_itens_local_on</li>". "</br>";
                //echo "</ul>";
                ?>