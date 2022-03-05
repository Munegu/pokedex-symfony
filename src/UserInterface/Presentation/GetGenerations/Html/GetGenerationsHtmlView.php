<?php

namespace App\UserInterface\Presentation\GetGenerations\Html;

use InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class GetGenerationsHtmlView
{
    public function __construct(
        private Environment $twig
    ) {
    }

    /**
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws InvalidArgumentException
     */
    public function generateView(GetGenerationsHtmlViewModel $viewModel): Response
    {
        $response = new Response();
        $response->setStatusCode($viewModel->httpCode);
        $response->setContent($this->twig->render('pokedex/pokedex.html.twig', [
            'generations' => $viewModel->generations,
        ]));

        return $response;
    }
}
