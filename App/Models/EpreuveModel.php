<?php

namespace App\Models;

use App\Model\ConnectionDb;

class EpreuveModel
{
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
