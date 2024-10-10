<?php

require_once '../config/database.php'; 
require_once '../vendor/autoload.php'; 

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->post('/persons', function ($request, $response) {
    $data = json_decode($request->getBody()->getContents(), true);
    $command = new \App\UseCases\Commands\CreatePersonCommand(
        $data['first_name'],
        $data['last_name'],
        $data['email'],
        $data['phone'],
        $data['address']
    );

    $handler = new \App\UseCases\Handlers\CreatePersonCommandHandler();
    $handler->handle($command);

    $response->getBody()->write(json_encode(['message' => 'Person created successfully']));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->get('/persons', function ($request, $response) {
    $query = new \App\UseCases\Queries\GetAllPersonsQuery();
    $handler = new \App\UseCases\Handlers\GetAllPersonsQueryHandler();
    $persons = $handler->handle($query);

    $response->getBody()->write(json_encode($persons));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();
