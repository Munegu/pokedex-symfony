<?php

namespace App\Core\Application\Port\Gateway;

use App\Core\Domain\Generation;

interface GenerationGatewayInterface
{
    /**
     * @return Generation[]
     */
    public function getGenerations(): array;
}
