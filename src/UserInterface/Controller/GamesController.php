<?php

namespace App\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GamesController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('games/games.html.twig');
    }
}
