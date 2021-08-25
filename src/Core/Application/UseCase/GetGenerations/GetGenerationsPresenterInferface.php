<?php

namespace App\Core\Application\UseCase\GetGenerations;

interface GetGenerationsPresenterInferface
{
    public function present(GetGenerationsResponse $response): void;
}
