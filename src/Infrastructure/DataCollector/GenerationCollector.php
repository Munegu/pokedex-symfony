<?php

namespace App\Infrastructure\DataCollector;

use App\Core\Domain\Generation;
use App\Infrastructure\Dto\Generations;
use App\Infrastructure\Service\AbstractService;
use App\UserInterface\Exception\InfrastructureException;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GenerationCollector extends AbstractService
{
    private const API_URL_GENERATION = 'generation/';

    public function __construct(
        private HttpClientInterface $client,
        private string $host
    ) {
    }

    /**
     * @return Generation[]
     *
     * @throws InfrastructureException
     */
    public function getGenerations(): array
    {
        try {
            $res =
                $this->client->request(
                    'GET',
                    sprintf('%s%s', $this->host, self::API_URL_GENERATION)
                );
        } catch (\Throwable $e) {
            throw new InfrastructureException(message: sprintf('Error when retrieving generations: %s', $e->getMessage()));
        }

        try {
            $generations = $this->getSerializer()->deserialize($res->getContent(), Generations::class, 'json');
        } catch (\Throwable $e) {
            throw new InfrastructureException(message: sprintf('Error when deserializing generations: %s', $e->getMessage()));
        }

        return $generations->getGenerations();
    }
}
