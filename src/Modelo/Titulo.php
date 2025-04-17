<?php

class Titulo
{
    private array $notas;
    private static float $notaMinima = 5;


    // Quando os parâmetros são passados com tipagem dentro do método (apenas no método "__construct"), eles já são automáticamente criados como propriedades
    public function __construct(
        // O método "readonly" serve para informar que determinadas propriedades são somente para leitura.
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,        
    ) {
        $this->nota = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
        // "$this" é utilizado quando quero fazer menção a um atributo do objeto.
        // "$this" aponta para o objeto que chamou avalia.

    }
    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        // A função "arraysum", soma o conteúdo de um array. 
        $quantidadeNotas = count($this->notas);
        // A função "count", conta quantos itens o array possue.



        return $somaNotas / $quantidadeNotas;
    }

    public function bom(): bool
    {
        return $this->media() >= self::$notaMinima;
    }

    // Método acessor, permite que eu acesse um método private. (getter)
    public function nome(): string
    {
        return $this->nome;
    }

    public function anoLancamento(): int
    {
        return $this->anoLancamento;
    }
}