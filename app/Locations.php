<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{

    protected $fillable
        = [
            'id',
            'parent',
            'name',
        ];

    protected $table = 'locations';

    public $timestamps = false;

}
