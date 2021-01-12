<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $filiable = [
        'admin_fullname',
        'admin_email',
        'admin_Number',
        'admin_password',
        'admin_image',
        'admin_image',

    ];
}
