<?php

namespace App\Controllers;

// use Symfony\Component\HttpFoundation\Request;


class AccueilControllers
{
    public function accueilTestControllers()
    {
        echo ('Vous êtes sur la page ACCUEIL');
    }

    public function index()
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('index.html.twig');
    }
}
