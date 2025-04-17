<?php

class Serie
{
    public function __construct(
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,  
        public readonly int $minutosPorEpisodio,      
    ) {
    }
}