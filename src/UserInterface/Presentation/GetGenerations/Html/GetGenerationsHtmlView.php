<?php

namespace App\UserInterface\Presentation\GetGenerations\Html;

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
     * @throws \InvalidArgumentException
     */
    public function generateView(GetGenerationsHtmlViewModel $viewModel): Response
    {
        $response = new Response();

        if (0 !== count($viewModel->errors)) {
            $response->setStatusCode($viewModel->httpErrorCode);
            $response->setContent($this->twig->render('TwigBundle/Exception/error.hml.twig'));
        } else {
            $response->setStatusCode($viewModel->httpCode);
            $response->setContent($this->twig->render('pokedex/pokedex.html.twig', [
                'generations' => $viewModel->generations,
            ]));
        }

        return $response;
    }
}
