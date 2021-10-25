<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function individual()
    {
        return $this->hasOne(Individual::class);
    }
    public function matchSoccers()
    {
        return $this->hasMany(MatchSoccer::class);
    }
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'organization_tournaments', 'tournament_id', 'teams_id');
    }
}
