<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function () {
    $output = "bonjour";


    return $output;
});

$app->get('/salutation/{nom}', function (Silex\Application $app, $nom) {
    $bonjour="bonjour".$nom;

    return $bonjour;
});

$app->post('/salutation', function (Request $request) {
    $nom = $request->get('nom');

    $bonjour="bonjour"." ".$nom;

    return $bonjour;
});


$app->run();
