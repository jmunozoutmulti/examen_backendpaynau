<?php

namespace App\Repositories;

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Domain\Entities\Person;

class PersonRepository
{
    public function create(Person $person)
    {
        Capsule::table('persons')->insert([
            'first_name' => $person->getFirstName(),
            'last_name' => $person->getLastName(),
            'email' => $person->getEmail(),
            'phone' => $person->getPhone(),
            'address' => $person->getAddress(),
        ]);
    }

    public function getAll()
    {
        $results = Capsule::table('persons')->get();
        $persons = [];

        foreach ($results as $result) {
            $persons[] = new Person(
                $result->id,
                $result->first_name,
                $result->last_name,
                $result->email,
                $result->phone,
                $result->address
            );
        }

        return $persons;
    }

    public function findById($id) {
        $personData = Capsule::table('persons')->where('id', $id)->first();
        if (!$personData) {
            return false;
        }
        return new Person(
            $personData->id,
            $personData->first_name,
            $personData->last_name,
            $personData->email,
            $personData->phone,
            $personData->address
        );
    }

    public function update(Person $person)
    {
        $exists = Capsule::table('persons')->where('id', $person->getId())->exists();
        if (!$exists) {
            return false;
        }
    
        Capsule::table('persons')
            ->where('id', $person->getId())
            ->update([
                'first_name' => $person->getFirstName(),
                'last_name' => $person->getLastName(),
                'email' => $person->getEmail(),
                'phone' => $person->getPhone(),
                'address' => $person->getAddress(),
            ]);
    }

    public function delete($id) 
    {
        $exists = Capsule::table('persons')->where('id', $id)->exists();
        if (!$exists) {
            return false;
        }

        Capsule::table('persons')->where('id', $id)->delete();
    }
}
