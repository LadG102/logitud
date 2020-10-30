<?php

namespace App\Controllers;


class EpreuveControllers
{
    public function creationEpreuve()
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('creation-epreuve.html.twig');
    }

    public function requete($request)
    {
        dd($request);
    }
}
