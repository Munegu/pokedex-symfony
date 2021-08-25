<?php

namespace App\Core\Application\UseCase\GetGenerations;

use App\Core\Domain\Generation;

class GetGenerationsResponse
{
    /**
     * @param Generation[] $generations
     */
    public function __construct(
        public array $generations = []
    ) {
    }
}
