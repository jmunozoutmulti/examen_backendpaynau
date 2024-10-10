<?php 
namespace App\UseCases\Handlers;

use App\Repositories\PersonRepository as RepositoriesPersonRepository;
use App\UseCases\Commands\DeletePersonCommand;
/**
 * @OA\Delete(
 *     path="/ExamenBackEndPayNau/persons/{id}",
 *     summary="Elimina una persona existente",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID de la persona a eliminar",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response="200", description="Persona eliminada exitosamente"),
 *     @OA\Response(response="404", description="Persona no encontrada"),
 *     @OA\Response(response="500", description="Error interno del servidor")
 * )
 */
class DeletePersonCommandHandler {
    private $repository;

    public function __construct() {
        $this->repository = new RepositoriesPersonRepository(); 
    }

    public function handle(DeletePersonCommand $command) {
        return $this->repository->delete($command->id);
    }
}
