<?php

namespace App\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AboutUsController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('about_us/about_us.html.twig');
    }
}
