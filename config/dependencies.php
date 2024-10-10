<?php

use DI\Container;
use App\UseCases\Commands\CreatePersonCommandHandler;
use App\UseCases\Queries\GetAllPersonsQueryHandler;

return function (Container $container) {
    $container->set(CreatePersonCommandHandler::class, function () {
        return new CreatePersonCommandHandler();
    });

    $container->set(GetAllPersonsQueryHandler::class, function () {
        return new GetAllPersonsQueryHandler();
    });
};
