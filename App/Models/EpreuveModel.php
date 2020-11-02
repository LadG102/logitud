<?php

namespace App\Models;

use App\Models\ConnectionDb;
use Symfony\Component\HttpFoundation\Request;

class EpreuveModel extends ConnectionDb
{


    public function addEpreuve(Request $request)
    {
        $pdo = $this->ConnDb();
        $pdo = $pdo->prepare('INSERT INTO epreuve(nomEpreuve, lieuEpreuve, dateEpreuve) VALUES(:id, :nom, :lieu, :date_)');
        $pdo->execute(array(
            'nom' => $request->get('nomEpreuve'),
            'lieu' => $request->get('lieuEpreuve'),
            'date_' => $request->get('dateEpreuve')
        ));
    }



    // public function __construct($request)
    // {
    //     $pdo = new ConnectionDb();

    //     $pdo = $pdo->prepare('INSERT INTO epreuve(id_epreuve, nomEpreuve, lieuEpreuve, dateEpreuve) VALUES(:id, :nom, :lieu, :dateEpreuve)');
    //     $pdo->execute(array(
    //         'id' => NULL,
    //         'nom' => $request->request->get('nomEpreuve'),
    //         'lieu' => $request->request->get('lieuEpreuve'),
    //         'dateEpreuve' => $request->request->get('dateEpreuve')

    //     ));

    //     echo 'Les informations concernant l\'epreuve on bien été ajouté !';
    // }
}
