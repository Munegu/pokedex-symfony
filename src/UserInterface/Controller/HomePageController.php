<?php

namespace App\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('homepage/homepage.html.twig');
    }
}
