<?php

namespace App\Models;

use App\Model\ConnectionDb;

class EpreuveModel extends ConnectionDb
{
    public function __construct()
    {
        $pdo = new ConnectionDb();
        $this->sreq = $pdo->connDb();
    }


    public function saveEpreuveData($request)
    {
        $req = $pdo->prepare('INSERT INTO epreuve(id_epreuve, nomEpreuve, lieuEpreuve, dateEpreuve) VALUES(:id, :nom, :lieu, :dateEpreuve)');
        $req->execute(array(
            'id' => NULL,
            'nom' => $request->request->get('nomEpreuve'),
            'lieu' => $request->request->get('lieuEpreuve'),
            'dateEpreuve' => $request->request->get('dateEpreuve')

        ));

        echo 'Le jeu a bien été ajouté !';
    }
}
