<?php

namespace App\Controllers;


class EpreuveControllers
{
    public function epreuveTestControllers()
    {
        echo ('Vous êtes sur la page EPREUVE');
    }
    public function creationEpreuve()
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('creation-epreuve.html.twig');
    }
}
