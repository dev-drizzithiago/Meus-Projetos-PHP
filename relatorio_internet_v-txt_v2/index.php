<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoramento</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php 
    $_local_arq_LAN = "_status_LAN.log";
    $_local_arq_WAN = "_status_WAN.log";
    $_valor_status_array_LAN = file_get_contents ($_local_arq_LAN);
    $_valor_status_array_WAN = file_get_contents($_local_arq_WAN);
    $_status_LAN = explode("-", $_valor_status_array_LAN);
    $_status_WAN = explode("-", $_valor_status_array_WAN);
?>

<body>
    <main>
        <div>
        <?php 
            echo "$_status_LAN";
        ?>
        </div>
    </main>
</body>
</html>