<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationTournament extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'organization_tournaments';
    protected $fillable = [
        'tournament_id',
        'teams_id',
    ];

    public function team(){
        return $this->belongsTo(Team::class, 'teams_id');
    }

    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }
}
