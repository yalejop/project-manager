<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // table companies

    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    public $timestamps = false;
}
