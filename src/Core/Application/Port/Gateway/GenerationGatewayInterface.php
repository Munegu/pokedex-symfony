<?php

namespace App\Core\Application\Port\Gateway;

use App\Core\Application\Port\Exception\InfrastructureExceptionInterface;
use App\Core\Domain\Generation;

interface GenerationGatewayInterface
{
    /**
     * @throws InfrastructureExceptionInterface
     *
     * @return Generation[]
     */
    public function getGenerations(): array;
}
