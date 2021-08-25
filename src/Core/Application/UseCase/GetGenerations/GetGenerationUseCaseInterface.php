<?php

namespace App\Core\Application\UseCase\GetGenerations;

interface GetGenerationUseCaseInterface
{
    public function execute(GetGenerationsPresenterInferface $presenter): void;
}
