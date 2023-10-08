<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio Internet_v-txt</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
    header("Refresh: 1; url = index.php");
?>
<body>
    <h1>STATUS DA INTERNET</h1>
<main class="principal">
    <?php 
        $_local_registro_on = "registro_ping_local_on.txt";
        $_internet_ping_on = "registro_ping_internet_on.txt";
        if(file_exists($_local_registro_on)){
            $_lista_local_on = file_get_contents($_local_registro_on);
            $_lista_local_array = explode("\n", $_lista_local_on);
            foreach($_lista_local_array as $_lista_itens_local_on) {
                echo "<ul>";
                echo "<li>$_lista_itens_local_on</li>". "</br>";
                echo "</ul>";
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