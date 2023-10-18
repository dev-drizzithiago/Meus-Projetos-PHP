<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10">
    <title>Monitoramento</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php 
    // Variaveis de local arquivo
    $_local_arq_LAN = "_status_LAN.log";
    $_local_arq_WAN = "_status_WAN.log";

    // Transformando os dados em array
    if (file_exists($_local_arq_LAN)) {
    $_valor_status_array_LAN = file_get_contents ($_local_arq_LAN);
    $_status_LAN = explode("-", $_valor_status_array_LAN);
    } else {
        $_status_WAN = "xx - xx - <desconhecido>";
    }

    if (file_exists($_local_arq_WAN)) {
    $_valor_status_array_WAN = file_get_contents($_local_arq_WAN);
    $_status_WAN = explode("-", $_valor_status_array_WAN);
    }  else {
        $_status_WAN = "xx - xx - <desconhecido>";
    }
?>
<body>
    <main>        
        <div class="div_lan">
        <h1>Status da Rede Local</h1>
            <?=$_status_LAN[2]?>   

        </div>
        <h1>Status da internet</h1>
        <div class="div_wan">
            <?=$_status_WAN[2]?>
        </div>
    </main>
</body>
</html>