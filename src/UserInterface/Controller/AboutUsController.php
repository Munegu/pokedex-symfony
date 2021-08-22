<?php

namespace App\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutUsController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('about_us/about_us.html.twig');
    }
}
