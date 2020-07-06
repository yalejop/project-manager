<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // table cities

    protected $table = 'cities';
    protected $primaryKey = 'city_id';
    public $timestamps = false;
}
