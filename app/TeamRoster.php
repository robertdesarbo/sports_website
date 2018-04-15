<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamRoster extends Model
{
    protected $table = "teams_roster";

    public function team()
    {
        return $this->belongsTo( 'App\Team', 'team_id', 'id' );
    }
}
