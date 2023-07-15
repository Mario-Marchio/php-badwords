<?php
    $paragrafo = $_GET["paragrafo"];
    $parola_censurata = $_GET["parola_censurata"];
    $paragrafo_censurato = str_ireplace($parola_censurata, '***', $paragrafo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paragrafo originale:</h1>
    <p><?=$paragrafo?></p>
    <p>Lunghezza: <?=strlen($paragrafo)?></p>

    <h1>Paragrafo censurato:</h1>
    <p><?=$paragrafo_censurato?></p>
    <p>Lunghezza: <?=strlen($paragrafo_censurato)?></p>
</body>
</html>
