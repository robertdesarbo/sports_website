<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function league()
    {
        return $this->belongsTo( 'App\League', 'league_id', 'id' );
    }
}
