<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchSoccer extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'match_soccers';
    protected $fillable = [
        'id',
        'name',
        'rank_id',
    ];

    public function rank(){
        return $this->belongsTo(Rank::class);
    }

    public function matchResults()
    {
        return $this->hasMany(MatchResult::class, 'match_id', 'id');
    }
}
