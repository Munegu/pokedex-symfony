<?php

namespace App\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GamesController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('games/games.html.twig');
    }
}
