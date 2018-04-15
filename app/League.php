<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function organization()
    {
        return $this->belongsTo( 'App\Organization', 'organization_id', 'id' );
    }
}
