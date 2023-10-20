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
    // Varias Globais
    $_contato_lan = 0;
    $_contato_wan = 0;

    // Variaveis data/hora
    date_default_timezone_set('America/Sao_Paulo');
        $_data_atual_global = date("d/m/Y");
        $_hora_atual_global = date("H:i");
        $_valor_hora_global = date("H");
        $_valor_minu_global = date("i");

    // Variaveis de local arquivo
    $_local_arq_LAN = "_status_LAN.log";
    $_local_arq_WAN = "_status_WAN.log";

    // Transformando os dados da LAN em array
    if (file_exists($_local_arq_LAN)) {
    $_valor_status_array_LAN = file_get_contents ($_local_arq_LAN);
    $_status_LAN = explode("-", $_valor_status_array_LAN);
    $_valor_data_LAN = $_status_LAN[0];
    $_valor_horario_LAN = $_status_LAN[1];
    $_valor_status_LAN = $_status_LAN[2];
    // Quebrando a variavel $_valor_horario_LAN
    $_valor_hora_array_LAN = explode(':', $_valor_horario_LAN);
    $_valor_hora_LAN = $_valor_hora_array_LAN[0];
    $_valor_minu_LAN = $_valor_hora_array_LAN[1];
    $_valor_segu_LAN = $_valor_hora_array_LAN[2];
    } else {
        $_status_LAN[2] = "DESCONHECIDO";
    }

    // Transformando os dados da WAN em array
    if (file_exists($_local_arq_WAN)) {
    $_valor_status_array_WAN = file_get_contents($_local_arq_WAN);
    $_status_WAN = explode("-", $_valor_status_array_WAN);
    $_valor_data_WAN = $_status_WAN[0];
    $_valor_horario_WAN = $_status_WAN[1];
    $_valor_status_WAN = $_status_WAN[2];
    // Quebrando a variavel $_valor_horario_WAN
    $_valor_hora_array_WAN = explode(':', $_valor_horario_WAN);
    $_valor_hora_WAN = $_valor_hora_array_WAN[0];
    $_valor_minu_WAN = $_valor_hora_array_WAN[1];
    $_valor_segu_WAN = $_valor_hora_array_WAN[2];
    }  else {
        $_status_WAN[2] = "DESCONHECIDO";
    }
?>
<!--img src="/relatorio_internet_v-txt_v2/img/img_001_ping_v2_off.jpg" alt="OFF"-->
<!--CORPO HTML-->
<body>
    
<main>
    <div class="div_data">
        <h1>Hora Certa</h1>
        <?="<h2>$_data_atual_global</h2>"?>
        <?="<h2>$_hora_atual_global</h2>"?>
    </div>

    <div class="div_lan">
    <h1>Status da Rede Local(LAN)</h1>
        <?php
            if ($_valor_status_LAN == " ATIVO") {
                if ($_valor_hora_LAN.$_valor_minu_LAN < $_valor_hora_global.$_valor_minu_global) {
                    echo '<img src="img/img_003_ping_v2_neutro.jpg">';
                } else {
                    echo '<img src="img/img_003_ping_v2_on.jpg">'; 
                }
            } elseif ($_valor_status_LAN == " INATIVO")
                if ($_valor_hora_LAN.$_valor_minu_LAN < $_valor_hora_global.$_valor_minu_global) {
                    echo '<img src="img/img_003_ping_v2_neutro.jpg">';
                } else {
                    echo '<img src="img/img_003_ping_v2_off.jpg">';
                }
        ?>
    </div>

    <div class="div_wan">
    <h1>Status da internet(WAN)</h1>
    <?php
            if ($_valor_status_WAN == " ATIVO") {
                if ($_valor_hora_WAN.$_valor_minu_WAN < $_valor_hora_global.$_valor_minu_global) {
                    echo '<img src="img/img_003_ping_v2_neutro.jpg">';
                } else {
                    echo '<img src="img/img_003_ping_v2_on.jpg">';
                }
            } elseif ($_status_WAN == " INATIVO") {
                if ($_valor_hora_WAN.$_valor_minu_WAN < $_valor_hora_global.$_valor_minu_global) {
                    echo '<img src="img/img_003_ping_v2_neutro.jpg">';
                } else {                    
                echo '<img src="img/img_003_ping_v2_off.jpg">';
                } 
            }
        ?>
    </div>
</main>
</body>
</html>