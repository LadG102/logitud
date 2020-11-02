<?php

namespace App\Models;

use App\Models\ConnectionDb;

class EpreuveModel extends ConnectionDb
{
    public function addEpreuve($request)
    {
        $pdo = $this->ConnDb();
        $pdo = $pdo->prepare('INSERT INTO epreuve(id_epreuve, nomEpreuve, lieuEpreuve, dateEpreuve) VALUES(:id, :nom, :lieu, :dateEpreuve)');
        $pdo->execute(array(
            'id' => NULL,
            'nom' => NULL,
            'lieu' => NULL,
            'dateEpreuve' => NULL
        ));
    }
    // public function __construct()
    // {
    //     $pdo = new ConnectionDb();
    //     $this->$pdo = $pdo->connDb();
    // }


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
