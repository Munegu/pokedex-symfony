<?php

namespace App\Core\Application\Port\Gateway;

use App\Core\Application\Port\Exception\InfrastructureExceptionInterface;
use App\Core\Domain\Generation;

interface GenerationGatewayInterface
{
    /**
     * @return Generation[]
     *
     * @throws InfrastructureExceptionInterface
     */
    public function getGenerations(): array;
}
