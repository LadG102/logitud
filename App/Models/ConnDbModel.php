<?php

namespace App\Models;

class ConnectionDb
{

    public function connDb()
    {
        // Création des variables qui vont nous permettre de nous connecter à la base de données
        $host = 'localhost';
        $db = 'logitud_app_ski';
        $user = 'root';
        $password = '';
        $charset = 'utf8mb4';

        // On stocke nos variables dans la variables $dsn = Data Source Name

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        // On stocke les différentes option dans un tableau
        $options = [
            \PDO::ATTR_ERRMODE              => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE   => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES     => false,
        ];

        //Initialisation de la connection avec un try / catch
        // 

        try {
            // On va stocker ici le résultat de la tentative de connection "\ de (\PDO) -> fait référence à la classe PHP
            $pdo = new \PDO($dsn, $user, $password, $options);
            //* echo 'Database Connection established ! - ';
            return $pdo; // je renvoie les infos contenus dans $pdo

            // On va réaliser le catch grâce à la classe PDOException (\PDOException) et on stocke le catch dans $e
        } catch (\PDOException $e) {
            // on envoie une nouvelle exception, et on envoie aussi le message le code de l'erreur
            throw new \PDOException($e->getMessage(), $e->getCode());
        }

        // TODO : Pour vérifier la connection:
        // TODO : 1/ on utilise le terminal avec la ligne de commande suivante : 
        // $ php App/..path/connDb.php
        // TODO : 2/ si la connection est établie le message ligne 34 apparait 'Database Connection established ! -' sinon le catch renvoie l'erreur

        // * POUR récupérer la connection dans un autre fichier il faut ajouter à l'entête du fichier :
        //TODO :  require 'path/connDb.php';
    }
}
