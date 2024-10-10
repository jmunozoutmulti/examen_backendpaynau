<?php

namespace App\UseCases\Handlers;

use App\Repositories\PersonRepository;
use App\UseCases\Queries\GetAllPersonsQuery;

class GetAllPersonsQueryHandler
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PersonRepository();
    }

    public function handle(GetAllPersonsQuery $query)
    {
        return $this->repository->getAll();
    }
}
