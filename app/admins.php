<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $filiable = [
        'admin_fullname',
        'admin_email',

        'admin_Number',
        'admin_password',
        'admin_image',

    ];
}
