<?php

namespace App\Modules;

use App\Persons;

class PersonsUpdate
{

    public function getInfo1() : Persons
    {
        $data = file_get_contents("https://portal.kuzstu.ru/api/persons/18263");
        $data = json_decode($data);
        $person = new Persons();
        $person->first_name = current($data)->first_name;
       // dd($person);
        return $person;
    }
}
