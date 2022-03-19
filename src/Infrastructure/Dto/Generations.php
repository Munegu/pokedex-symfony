<?php

namespace App\Infrastructure\Dto;

use App\Core\Domain\Generation;
use Symfony\Component\Serializer\Annotation\SerializedName;

class Generations
{
    /**
     * @param Generation[] $generations
     */
    public function __construct(
        private int $count,
        private ?string $next,
        private ?string $previous,
        #[SerializedName('results')]
        private array $generations,
    ) {
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getNext(): ?string
    {
        return $this->next;
    }

    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * @return Generation[]
     */
    public function getGenerations(): array
    {
        return $this->generations;
    }
}
