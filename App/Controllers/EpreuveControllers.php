<?php

namespace App\Controllers;

use App\Models\EpreuveModel;


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
