<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function league()
    {
        return $this->hasMany( 'App\League', 'organization_id', 'id' );
    }
}
