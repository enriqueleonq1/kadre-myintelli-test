<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIntelli extends Model
{   
    public $timestamps = false;
    protected $primaryKey = 'id_user';
    
    protected $fillable = [
        'id_user',
        'email',
        'first_name',
        'last_name',
        'structures',
        'roles',
        'registration_stations',
        'settings_user',
        'notifications',
        'phone',
        'status',
        'all_permission',
        'create_visit',
        'login_failed',
        'ip'
    ];

    protected $casts = [
        'structures' => 'json', // Optional casting if needed
        'roles' => 'json', // Optional casting if needed
        'registration_stations' => 'json', // Optional casting if needed
        'settings_user' => 'json',
        'notifications' => 'json', // Optional casting if needed
    ];
}
