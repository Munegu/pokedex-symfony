<?php

namespace App\UserInterface\Presentation\GetGenerations\Html;

class GetGenerationsHtmlViewModel
{
    public int $httpCode = 200;

    /**
     * @var array<array{numberGeneration: int, name: string}>
     */
    public array $generations = [];
}
