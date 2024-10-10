<?php

namespace App\UseCases\Handlers;

use App\Repositories\PersonRepository;
use App\UseCases\Commands\CreatePersonCommand;

class CreatePersonCommandHandler
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PersonRepository();
    }

    public function handle(CreatePersonCommand $command)
    {
        $person = new \App\Domain\Entities\Person(
            null,
            $command->getFirstName(),
            $command->getLastName(),
            $command->getEmail(),
            $command->getPhone(),
            $command->getAddress()
        );

        $this->repository->create($person);
    }
}
