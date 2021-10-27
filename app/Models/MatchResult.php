<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchResult extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'match_results';
    protected $fillable = [
        'id',
        'team_id',
        'team_point',
        'match_id',
    ];

    public function matchSoccer()
    {
        return $this->belongsTo(MatchSoccer::class, 'match_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
