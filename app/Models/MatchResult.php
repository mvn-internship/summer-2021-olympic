<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchResult extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
    public function matchSoccer()
    {
        return $this->belongsTo(MatchSoccer::class, 'match_id', 'id');
    }
}
