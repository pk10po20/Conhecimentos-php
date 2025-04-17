<?php 

// Incluindo os arquivos a onde esta sendo executado.
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo(a) ao Screen Match\n";

// Chama automáticamente o método "__construct" para criar um novo objeto.
$filme = new Filme(
    'Thor',
    2021,
    Genero::SuperHeroi,
    120,
);

$filme->avalia(0);
$filme->avalia(0);
$filme->avalia(3);
$filme->avalia(10);

var_dump($filme);

if($filme->bom()) {
    echo "Este é um bom filme!";
}
else {
    echo "Este filme é muito ruim!";
}

echo "\nA média de notas desse filme é:" . $filme->media() . "\n" ;
echo "O ano de lancamento do filme '" . $filme->nome() . "' é: " . $filme->anoLancamento();
echo "\nO filme possue '" . $filme->duracaoEmMinutos() . "' minutos de duração.";
