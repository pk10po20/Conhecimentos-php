<?php

// Extends víncula a classe "Filme" com "Titulo".
class Filme extends Titulo
{
// Class define um novo tipo (int, string, float) porém, nesse caso é um tipo complexo, pois é um tipo que possue vários valores.
    // Quando os parâmetros são passados com tipagem dentro do método (apenas no método "__construct"), eles já são automáticamente criados como propriedades
    public function __construct(
        public readonly int $duracaoEmMinutos,
        
    ) {
        function duracaoEmMinutos(): int
        {
            return $this->duracaoEmMinutos;
        }
    } 
}
