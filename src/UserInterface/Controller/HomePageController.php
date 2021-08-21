<?php

namespace App\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('homepage/homepage.html.twig');
    }
}
