<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    public $id;
    public $surname;
    public $first_name;
    public $middle_name;
    public $photo;
    public $work_place_number;
}
