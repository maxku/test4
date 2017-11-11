<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{

    protected $fillable
        = [
            'uid',
            'height',
            'weight',
            'detection_date',
            'gps',
        ];

    protected $table = 'detections';

    public $timestamps = false;

}
