<?php

namespace App\UserInterface\Presentation\GetGenerations\Html;

class GetGenerationsHtmlViewModel
{
    public int $httpCode = 200;

    public int $httpErrorCode = 500;

    /**
     * @var array<array{name: string, url: string}>
     */
    public array $generations = [];

    /**
     * @var string[]
     */
    public array $errors = [];
}
