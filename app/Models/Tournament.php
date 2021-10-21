<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tournaments';
    protected $fillable  = ['id', 'name', 'start_date', 'end_date'];

    public function organizationTournaments() {
        return $this->hasMany(OrganizationTournament::class, 'tournament_id', 'id');
    }
}
