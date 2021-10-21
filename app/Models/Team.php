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
}
