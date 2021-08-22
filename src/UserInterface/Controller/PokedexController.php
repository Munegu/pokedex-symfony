<?php

namespace App\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PokedexController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('pokedex/pokedex.html.twig');
    }
}
