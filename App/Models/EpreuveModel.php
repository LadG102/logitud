<?php

namespace App\Models;

use App\Model\ConnectionDb;

require '../db/ConnDB.php';

class EpreuveModel extends ConnectionDb
{

    public function saveEpreuveData($request)
    {
        $req = $pdo->prepare('INSERT INTO epreuve(id_epreuve, nomEpreuve, lieuEpreuve, dateEpreuve) VALUES(:id, :nom, :lieu, :date)');
        $req->execute(array(
            'id' => NULL,
            'nom' => $request->request->get('nomEpreuve'),
            'lieu' => $request->request->get('lieuEpreuve'),
            'date' => $request->request->get('dateEpreuve')

        ));

        echo 'Le jeu a bien été ajouté !';
    }
}
