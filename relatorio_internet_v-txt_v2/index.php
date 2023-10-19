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
    $_valor_status_LAN = $_status_LAN[2];
    } else {
        $_status_LAN[2] = "DESCONHECIDO";
    }

    if (file_exists($_local_arq_WAN)) {
    $_valor_status_array_WAN = file_get_contents($_local_arq_WAN);
    $_status_WAN = explode("-", $_valor_status_array_WAN);
    $_valor_status_WAN = $_status_WAN[2];
    }  else {
        $_status_WAN[2] = "DESCONHECIDO";
    }
?>
<body>
    <!--img src="/relatorio_internet_v-txt_v2/img/img_001_ping_v2_off.jpg" alt="OFF"-->
<main>        
    <div class="div_lan">
    <h1>Status da Rede Local(LAN)</h1>
        <?php
            if ($_valor_status_LAN == " INATIVO") {
                echo '<img src="img/img_001_ping_v2_off.jpg">';
            } else {
                echo '<img src="img/img_001_ping_v2_on.jpg">';
            }
        ?>
    </div>

    <div class="div_wan">

    <h1>Status da internet(WAN)</h1>
    <?php
            if ($_valor_status_WAN == " INATIVO") {
                echo '<img src="img/img_001_ping_v2_off.jpg">';
            } else {
                echo '<img src="img/img_001_ping_v2_on.jpg">';
            }
        ?>
    </div>
</main>
</body>
</html>