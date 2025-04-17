<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme // Precisa me retornar um filme
{
    $filme = new Filme(); // Cria uma variável do tipo "Filme"

    $filme -> nome = $nome; 
    $filme -> anoLancamento = $anoLancamento;
    $filme -> nota = $nota;
    $filme -> genero = $genero;

    // Buscando da variável filme, o argumento "nome" e transformando-o em uma variável.
    // Para acessar o nome do filme, falando de uma variavél que é criada a partir de uma classe, é necessário utiizar "->".

    return $filme;
}