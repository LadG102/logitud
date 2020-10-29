<?php

namespace App\Controllers;


class ParticipantControllers
{
    public function participantTestControllers()
    {
        echo ('Vous êtes sur la page PARTICIPANT');
    }

    public function creationParticipant()
    {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('creation-participant.html.twig');
    }
}
