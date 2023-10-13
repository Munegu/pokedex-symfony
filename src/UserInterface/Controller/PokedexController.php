<?php

namespace App\UserInterface\Controller;

use App\Core\Application\UseCase\GetGenerations\GetGenerationUseCaseInterface;
use App\UserInterface\Presentation\GetGenerations\Html\GetGenerationsHtmlPresenter;
use App\UserInterface\Presentation\GetGenerations\Html\GetGenerationsHtmlView;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class PokedexController extends AbstractController
{
    /**
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws \InvalidArgumentException
     */
    public function __invoke(
        GetGenerationUseCaseInterface $useCase,
        GetGenerationsHtmlPresenter $presenter,
        GetGenerationsHtmlView $view
    ): Response {
        $useCase->execute($presenter);

        return $view->generateView($presenter->getViewModel());
    }
}
