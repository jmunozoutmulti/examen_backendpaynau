<?php

namespace App\UseCases\Handlers;

use App\Repositories\PersonRepository as RepositoriesPersonRepository;
use App\UseCases\Commands\UpdatePersonCommand;

/**
 * @OA\Put(
 *     path="/ExamenBackEndPayNau/persons/{id}",
 *     summary="Actualiza una persona existente",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de la persona a actualizar",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"first_name", "last_name", "email", "phone", "address"},
 *             @OA\Property(property="first_name", type="string"),
 *             @OA\Property(property="last_name", type="string"),
 *             @OA\Property(property="email", type="string"),
 *             @OA\Property(property="phone", type="string"),
 *             @OA\Property(property="address", type="string")
 *         )
 *     ),
 *     @OA\Response(response="200", description="Persona actualizada exitosamente"),
 *     @OA\Response(response="400", description="Error en la validación de datos"),
 *     @OA\Response(response="404", description="Persona no encontrada"),
 *     @OA\Response(response="500", description="Error interno del servidor")
 * )
 */
class UpdatePersonCommandHandler
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RepositoriesPersonRepository();
    }

    public function handle(UpdatePersonCommand $command)
    {
        $person = $this->repository->findById($command->getId());

        if (!$person) {
            throw new \Exception('Person not found');
        }

        $person->setFirstName($command->getFirstName());
        $person->setLastName($command->getLastName());
        $person->setEmail($command->getEmail());
        $person->setPhone($command->getPhone());
        $person->setAddress($command->getAddress());

        $this->repository->update($person);
    }
}
