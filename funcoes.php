<?php 

function exibirMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lancamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme aonda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020;
}