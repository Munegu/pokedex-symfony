<?php

namespace App\Core\Domain;

class Generation
{
    public function __construct(
        private int $numberGeneration,
        private string $name
    ) {
    }

    public function getNumberGeneration(): int
    {
        return $this->numberGeneration;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
