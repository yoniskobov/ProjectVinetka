<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = [
        'mps_type',
        'licence_plate',
        'validity',
        'mps_nationality'
    ];
}
