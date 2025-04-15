<?php

$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true);

?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="style/index.css">
    <title>Filme inserido</title>
</head>
    <body>
        <div class="container">
            <h1><?= $filme['nome']; ?></h1>
            <dl>
                <dt>Ano de lançamento</dt>
                <dd><?= $filme['anoLancamento']; ?></dd>

                <dt>Nota</dt>
                <dd><?= $filme['nota']; ?></dd>

                <dt>Gênero</dt>
                <dd><?= $filme['genero']; ?></dd>
            </dl>
        </div>
    </body>
</html>