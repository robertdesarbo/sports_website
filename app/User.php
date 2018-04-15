<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function organization()
    {
        return $this->hasOne('App\OrganizationManagement', 'user_id', 'id' );
    }

    public function team()
    {
        return $this->belongsTo( 'App\TeamRoster', 'id', 'user_id' );
    }
}
