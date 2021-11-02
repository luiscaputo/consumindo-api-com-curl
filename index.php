<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        $url = "https://desenvolvimento.gov.ao/dev.api/bi/?bi=006989589LA042";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        var_dump($resultado);
        echo $resultado;

        foreach ($resultado->results as $bi) {
            //var_dump($ator);
            echo "Nome: " . $bi->ID_NUMBER . "<br>";
            echo "Altura: " . $ator->height . "<br>";
            
            foreach ($ator->films as $filme) {
                echo "Filme: " . $filme . "<br>";
            }
            
            echo "<hr>";
        }
        ?>
    </body>
</html>
