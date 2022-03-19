<?php

namespace App\Core\Application\UseCase\GetGenerations;

use App\Core\Application\Port\Exception\InfrastructureExceptionInterface;
use App\Core\Application\Port\Gateway\GenerationGatewayInterface;

class GetGenerationsUseCase implements GetGenerationUseCaseInterface
{
    public function __construct(
        private GenerationGatewayInterface $gateway
    ) {
    }

    public function execute(GetGenerationsPresenterInferface $presenter): void
    {
        $response = new GetGenerationsResponse();

        try {
            $response->generations = $this->gateway->getGenerations();
        } catch (InfrastructureExceptionInterface $e) {
            $response->errors[] = $e->getMessage();
        }

        $presenter->present($response);
    }
}
