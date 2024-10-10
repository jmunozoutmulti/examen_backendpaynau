<?php 
namespace App\UseCases\Commands;

class DeletePersonCommand {
    public function __construct(public $id) {}
}