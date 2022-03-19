<?php

namespace App\Core\Domain;

class Generation
{
    public function __construct(
        private string $name,
        private string $url
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
