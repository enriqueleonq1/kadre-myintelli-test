<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIntelliWidgets extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'h',
        'w',
        'x',
        'y',
        'id_widget',
        'id_widget_user'
    ];

}
