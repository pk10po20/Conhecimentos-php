<?php

class Serie
{
    private array $notas;
    private static float $notaMinima = 5;

    public function __construct(

        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
        public int $temporadas,
        public int $episodiosPorTemporada,  
        public int $minutosPorEpisodio,      
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

    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }
}