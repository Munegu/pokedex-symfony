<?php

namespace App\Tests\Core\Application\UseCase;

use App\Core\Application\Port\Gateway\GenerationGatewayInterface;
use App\Core\Application\UseCase\GetGenerations\GetGenerationsPresenterInferface;
use App\Core\Application\UseCase\GetGenerations\GetGenerationsResponse;
use App\Core\Application\UseCase\GetGenerations\GetGenerationsUseCase;
use App\Core\Domain\Generation;
use PHPUnit\Framework\TestCase;

class GetGenerationsUseCaseTest extends TestCase implements GetGenerationsPresenterInferface
{
    private GetGenerationsResponse $response;
    private GenerationGatewayInterface $gateway;
    private array $fakeGenerations;

    protected function setUp(): void
    {
        $this->gateway = $this->createMock(GenerationGatewayInterface::class);
        $this->fakeGenerations = [
          new Generation(
              numberGeneration: 22, name: 'Génération test'),
          new Generation(
              numberGeneration: 44,
              name: 'Génération Team Rocket'
          ),
        ];
    }

    public function present(GetGenerationsResponse $response): void
    {
        $this->response = $response;
    }

    public function testGatewayReturn(): void
    {
        $this->gateway->method('getGenerations')->willReturn($this->fakeGenerations);

        $useCase = new GetGenerationsUseCase($this->gateway);
        $useCase->execute($this);

        $this->assertEquals($this->fakeGenerations, []);
//        $this->assertEquals($this->fakeGenerations, $this->response->generations);
    }
}
