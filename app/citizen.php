<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class citizen extends Model
{
    protected $table = 'citizens';
    protected $filiable = [
        'fullname',
        'citizen_gender',
        'citizen_city',
        'citizen_Nid',
        'Number',
        'citizen_address',

    ];
}
