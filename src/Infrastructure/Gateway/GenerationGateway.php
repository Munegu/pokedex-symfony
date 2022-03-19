<?php

namespace App\Infrastructure\Gateway;

use App\Core\Application\Port\Gateway\GenerationGatewayInterface;
use App\Core\Domain\Generation;
use App\Infrastructure\DataCollector\GenerationCollector;
use App\UserInterface\Exception\InfrastructureException;

class GenerationGateway implements GenerationGatewayInterface
{
    public function __construct(
        private GenerationCollector $generationCollector
    ) {
    }

    /**
     * @throws InfrastructureException
     *
     * @return Generation[]
     */
    public function getGenerations(): array
    {
        return $this->generationCollector->getGenerations();
    }
}
