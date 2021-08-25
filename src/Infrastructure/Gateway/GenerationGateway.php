<?php

namespace App\Infrastructure\Gateway;

use App\Core\Application\Port\Gateway\GenerationGatewayInterface;
use App\Core\Domain\Generation;

class GenerationGateway implements GenerationGatewayInterface
{
    private const GENERATIONS = [
        [
            'number' => 1,
            'name' => 'Première génération',
        ],
        [
            'number' => 2,
            'name' => 'Deuxième génération',
        ],
    ];

    /**
     * @return Generation[]
     */
    public function getGenerations(): array
    {
        $generations = [];

        foreach (self::GENERATIONS as $generation) {
            $generations[] = new Generation(
                numberGeneration: $generation['number'],
                name: $generation['name']
            );
        }

        return $generations;
    }
}
