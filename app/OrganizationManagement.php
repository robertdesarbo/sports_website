<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationManagement extends Model
{
    protected $table = "organizations_management";

    public function post()
    {
        return $this->belongsTo( 'App\League', 'user_id', 'id' );
    }
}
