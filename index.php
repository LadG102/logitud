<?php

// Symfony

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


// App\
use App\Controllers\AccueilControllers;
use App\Controllers\CategorieControllers;
use App\Controllers\EpreuveControllers;
use App\Controllers\ParticipantControllers;
use App\Controllers\PassageControllers;
use App\Controllers\ProfilControllers;

require __DIR__ . '/vendor/autoload.php';


$request = Request::createFromGlobals();


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/accueil', [new AccueilControllers(), 'index']);
    $r->addRoute('GET', '/categorie', [new CategorieControllers(), 'categorieTestControllers']);
    $r->addRoute('GET', '/epreuve', [new EpreuveControllers(), 'creationEpreuve']);
    $r->addRoute('POST', '/epreuve', [new EpreuveControllers(), 'requete']);

    $r->addRoute('GET', '/participant', [new ParticipantControllers(), 'creationParticipant']);
    $r->addRoute('POST', '/participant', [new ParticipantControllers(), 'creationParticipant']);
    $r->addRoute('GET', '/passage', [new PassageControllers(), 'passageTestControllers']);
    $r->addRoute('GET', '/profil', [new ProfilControllers(), 'profilTestControllers']);
    $r->addRoute('GET', '/profil/{name}', [new ProfilControllers(), 'profilTestControllers']);
});



// **** AVEC HTTP FOUNDATION

// !modification pour utiliser HTTP Foundation
// Fetch method and URI from somewhere
$httpMethod = $request->getMethod();


// !modification pour utiliser HTTP Foundation
// $uri = $_SERVER['REQUEST_URI'];
$uri = $request->getPathInfo();

// Strip query string (?foo=bar) and decode URI
// if (false !== $pos = strpos($uri, '?')) {
//     $uri = substr($uri, 0, $pos);
// }
// $uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo '404 :  Page non trouvée !';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo '405 : Méthode non trouvée !';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        // $vars = $routeInfo[2];

        $request->query->add($routeInfo[2]);

        call_user_func_array($handler, [$request]);
        break;
}


//  ! DUMP DE LA REQUEST.....................;
dump($request);


// FIN avec HTTP FOUNDATION


//**** EN UTILISANT FASTROUTE
// // Strip query string (?foo=bar) and decode URI
// if (false !== $pos = strpos($uri, '?')) {
//     $uri = substr($uri, 0, $pos);
// }
// $uri = rawurldecode($uri);

// $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
// switch ($routeInfo[0]) {
//     case FastRoute\Dispatcher::NOT_FOUND:
//         // ... 404 Not Found
//         echo '404 :  Page non trouvée !';
//         break;
//     case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
//         $allowedMethods = $routeInfo[1];
//         // ... 405 Method Not Allowed
//         echo '405 : Méthode non trouvée !';
//         break;
//     case FastRoute\Dispatcher::FOUND:
//         $handler = $routeInfo[1];
//         $vars = $routeInfo[2];
//         call_user_func_array($handler, [$vars]);
//         break;
// }


// FIN avec FASTROUTE