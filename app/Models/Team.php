<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'teams';
    protected $fillable = [
        'id',
        'name',
    ];

    public function organizationTournaments(){
        return $this->hasMany(OrganizationTournament::class, 'teams_id', 'id');
    }
    
    public function matchResults()
    {
        return $this->hasMany(MatchResult::class, 'team_id');
    }

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'organization_tournaments', 'teams_id', 'tournament_id');
    }
}
